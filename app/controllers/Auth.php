<?php

//////////////// Blog Auth ////////////////

// TODO: Humm it's bug, not a feature

$app->get("/logout", $authCheck, function () use ($app) {
	unset($_SERVER['PHP_AUTH_USER']);
	unset($_SERVER['PHP_AUTH_PW']);
	// unset($_COOKIE);
	// $app->view()->setData('PHP_AUTH_USER', null);
	// $app->view()->setData('PHP_AUTH_PW', null);
	session_unset();
    session_destroy();
   	$app->flash('ok', _('Logout'));
   	$app->redirect('/');
});

?>