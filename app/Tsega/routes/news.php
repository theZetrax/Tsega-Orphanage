<?php

$app->get('/news', function() use ($app) {
	$app->render('news/home.php');
})->name('news.home');

$app->get('/news/sadnews', function() use ($app) {
	$app->render('news/news_1.php');
})->name('news.first');