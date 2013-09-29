<?php

// Auth Check.
$authCheck = function() use ($app) {
	// $authRequest 	= isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
	// $authUser 		= $authRequest && $_SERVER['PHP_AUTH_USER'] === USERNAME;
	// $authPass 		= $authRequest && $_SERVER['PHP_AUTH_PW'] === PASSWORD;

	// if (! $authUser || ! $authPass) {
	// 	$app->response()->header('WWW-Authenticate: Basic realm="My QCM Administration"', '');
	// 	$app->response()->header('HTTP/1.1 401 Unauthorized', '');
	// 	$app->response()->body('<h1>Please enter valid administration credentials</h1>');
	// 	$app->response()->send();
	// 	exit;
	// }
};

// List authors
$app->get('/admin/authors', function() use ($app) {
	$authors = Model::factory('Author')->find_many();
					
	return $app->render('author/index.html', array('authors' => $authors));		
});

// Admin AddAuthor.
$app->get('/admin/addauthor', $authCheck, function() use ($app) {
	return $app->render('author/admin_author.html', array('action_name' => 'Add', 'action_url' => '/admin/addauthor'));
});	

// Admin AddAuthor - POST.
$app->post('/admin/addauthor', $authCheck, function() use ($app) {
	$author 			= Model::factory('Author')->create();
	$author->nom 		= $app->request()->post('nom');
	$author->email 		= $app->request()->post('email');
	$author->login 		= $app->request()->post('login');
	$author->pass 		= md5($app->request()->post('pass'));
	$author->statut		= 0;
	$author->save();
	
	$app->redirect('/admin');
});

// Admin EditAuthor.
$app->get('/admin/authoredit/(:id)', $authCheck, function($id) use ($app) {
	$author = Model::factory('Author')->find_one($id);
	if (! $author instanceof Author) {
		$app->notFound();
	}	
	
	return $app->render('author/admin_author.html', array(
		'action_name' 	=> 	'Edit', 
		'action_url' 	=> 	'/admin/authoredit/' . $id,
		'author'		=> 	$author
	));
});

// Admin EditAuthor - POST.
$app->post('/admin/authoredit/(:id)', $authCheck, function($id) use ($app) {
	$author = Model::factory('Author')->find_one($id);
	if (! $author instanceof Author) {
		$app->notFound();
	}
	
	$author->nom 		= $app->request()->post('nom');
	$author->email 		= $app->request()->post('email');
	$author->login 		= $app->request()->post('login');
	$author->pass 		= $app->request()->post('pass');
	$author->statut		= 0;
	// $author->htpass		= crypt($app->request()->post('statut'));
	$author->save();
	
	$app->redirect('/admin');
});


// Admin publishAuthor.
$app->get('/admin/authorpublish/(:id)', $authCheck, function($id) use ($app) {
	$author = Model::factory('Author')->find_one($id);

	if (! $author instanceof Author) {
		$app->notFound();
	}	
	
	$author->statut = $author->statut == 1 ? 0 : 1;
	$author->save();

	$app->redirect('/admin');
});

// Admin DeleteAuthor.
$app->get('/admin/authordelete/(:id)', $authCheck, function($id) use ($app) {
	$author = Model::factory('Author')->find_one($id);
	if ($author instanceof Author) {
		$author->delete();
	}
	
	$app->redirect('/admin');
});
