<?php

//////////////// Blog About ////////////////

$app->get('/about', function() use ($app) {
	return $app->render('about/index.html');		
});