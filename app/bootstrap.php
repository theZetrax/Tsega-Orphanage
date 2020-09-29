<?php

ini_set('display_errors', 'on');
ini_set('session.save_path', '/tmp');

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Noodlehaus\Config;

session_cache_limiter(false);
session_start();

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new Slim([
	'mode' => trim(file_get_contents( INC_ROOT . '/mode.php' )),
	'view' => new Twig(),
	'templates.path' => INC_ROOT . '/app/views'
]);

require 'routes.php';

$app->configureMode($app->config('mode'), function() use ($app) {
	$app->config = Config::load(INC_ROOT . "/app/config/{$app->mode}.php");
});

$view = $app->view();

$view->parserOptions = [
	'debug' => $app->config->get('twig.debug')
];

$view->parserExtensions = [
	new TwigExtension
];
