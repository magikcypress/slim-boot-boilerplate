<?php

//////////////// Blog Article ////////////////

// Auth Check.
$authCheck = function() use ($app) {
	// $authRequest 	= isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
	$authUser 		= $_SERVER['PHP_AUTH_USER'];
	$authPass 		= $_SERVER['PHP_AUTH_PW'];

	if (! $authUser || ! $authPass) {
		$app->response()->header('WWW-Authenticate: Basic realm="My Blog Administration"', '');
		$app->response()->header('HTTP/1.1 401 Unauthorized', '');
		$app->response()->body('<h1>Please enter valid administration credentials</h1>');
		$app->response()->send();
		exit;
	}
};

// Blog Homepage.
$app->get('/', function() use ($app) {
	$art = Model::factory('Article')
					->order_by_desc('timestamp')
					->find_many();

	$articles = array();
	foreach ($art as $article) {
		# get author by article
		$authors = $article->author()->find_one();

		$article = array('id' => $article->id,
					    'publish' => $article->publish,
						'title' => $article->title,
						'summary' => $article->summary,
						'timestamp' => $article->timestamp,
						'content' => $article->content,
						'author' => $authors->nom);
		array_push($articles, $article);
	}

	return $app->render('article/index.html', array('articles' => $articles));		
});

// Blog View.
$app->get('/view/(:id)', function($id) use ($app) {
	$article = Model::factory('Article')->find_one($id);
	$author = $article->author()->find_one();
	if (! $article instanceof Article) {
		$app->notFound();
	}
	
	return $app->render('article/detail.html', array('article' => $article, 'author' => $author));
});

// Admin Home.
$app->get('/admin/', $authCheck, function() use ($app) {
	// Display articles
	$art = Model::factory('Article')
					->order_by_desc('timestamp')
					->find_many();

	$articles = array();
	foreach ($art as $article) {
		# get author by article
		$authors = $article->author()->find_one();

		$article = array('id' => $article->id,
					    'publish' => $article->publish,
						'title' => $article->title,
						'summary' => $article->summary,
						'timestamp' => $article->timestamp,
						'content' => $article->content,
						'author' => $authors->nom);
		array_push($articles, $article);
	}

	// Display authors
	$authors = Model::factory('Author')->find_many();
					
	return $app->render('article/admin.html', array('articles' => $articles, 'authors' => $authors));
});

// Admin Add.
$app->get('/admin/add', $authCheck, function() use ($app) {
	$authors = Model::factory('Author')->find_many();
	return $app->render('article/admin_input.html', array('action_name' => 'Add', 'action_url' => '/admin/add', 'authors' => $authors));
});	

// Admin Add - POST.
$app->post('/admin/add', $authCheck, function() use ($app) {
	$article 			= Model::factory('Article')->create();
	// $article->id 		= 1; Because sqlite
	// $article->publish	= 1; Because sqlite
	$article->title 	= $app->request()->post('title');
	$article->author_id	= $app->request()->post('author');
	$article->summary 	= $app->request()->post('summary');
	$article->content 	= $app->request()->post('content');
	$article->timestamp = date('Y-m-d H:i:s');
	$article->save();
	
	$app->redirect('/admin');
});

// Admin Edit.
$app->get('/admin/edit/(:id)', $authCheck, function($id) use ($app) {
	$article = Model::factory('Article')->find_one($id);
	$authors = Model::factory('Author')->find_many();
	
	if (! $article instanceof Article) {
		$app->notFound();
	}		
	
	return $app->render('article/admin_input.html', array(
		'action_name' 	=> 	'Edit', 
		'action_url' 	=> 	'/admin/edit/' . $id,
		'article'		=> 	$article,
		'authors'		=> 	$authors
	));
});

// Admin Edit - POST.
$app->post('/admin/edit/(:id)', $authCheck, function($id) use ($app) {
	$article = Model::factory('Article')->find_one($id);
	if (! $article instanceof Article) {
		$app->notFound();
	}
	
	$article->title 	= $app->request()->post('title');
	$article->author_id	= $app->request()->post('author');
	$article->summary 	= $app->request()->post('summary');
	$article->content 	= $app->request()->post('content');	
	$article->timestamp = date('Y-m-d H:i:s');
	$article->save();
	
	$app->redirect('/admin');
});

// Admin publish.
$app->get('/admin/publish/(:id)', $authCheck, function($id) use ($app) {
	$article = Model::factory('Article')->find_one($id);

	if (! $article instanceof Article) {
		$app->notFound();
	}	
	
	$article->publish = $article->publish == 1 ? 0 : 1;
	$article->save();

	$app->redirect('/admin');
});

// Admin Delete.
$app->get('/admin/delete/(:id)', $authCheck, function($id) use ($app) {
	$article = Model::factory('Article')->find_one($id);
	if ($article instanceof Article) {
		$article->delete();
	}
	
	$app->redirect('/admin');
});

