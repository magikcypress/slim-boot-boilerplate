<?php

//////////////// Blog Contact ////////////////

$app->get('/contact', function() use ($app) {
	return $app->render('contact/index.html', array('action_name' => _('Send'), 'action_url' => '/contactsend'));		
});