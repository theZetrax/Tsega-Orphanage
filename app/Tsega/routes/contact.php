<?php

$app->get('/contact', function() use ($app) {
	$app->render('contact.php');
})->name('contact');