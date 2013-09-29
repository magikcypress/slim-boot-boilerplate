<?php

//////////////// Blog Auth ////////////////

$app->get("/logout", function () use ($app) {
	unset($_SERVER['PHP_AUTH_USER']);
	unset($_SERVER['PHP_AUTH_PW']);
	$app->view()->setData('PHP_AUTH_USER', null);
	$app->view()->setData('PHP_AUTH_PW', null);
   	$app->flash('error', 'Logout');
   	$app->redirect('/');
});

?>