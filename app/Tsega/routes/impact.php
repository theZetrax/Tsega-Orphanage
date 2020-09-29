<?php

$app->get('/impact', function() use ($app) {
	$app->render('impact/home.php');
})->name('impact.home');

$app->get('/impact/first_encounter', function() use ($app) {
	$app->render('impact/impact_1.php');
})->name('impact.first');