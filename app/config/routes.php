<?php

use app\controllers\ApiExampleController;
use app\controllers\ColisController;
use app\controllers\MiniTemplateController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	$router->get('/', function() use ($app) {
		$app->render('welcome', [ 'message' => 'You are gonna do great things!' ]);
	});

	$router->get('/colis/liste',[ColisController::class,'allcolis']);
		

	// $router->get('/produit', function() use ($app) {
	// 	$app->render('produit');
	// });

	// $router->get('/route-iray', function() use ($app) {
	// 	echo '<h1>Hello world! hjiashbfcsiwjdbiv!</h1>';
	// });

	// $router->get('/hello-world/@name', function($name) {
	// 	echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
	// });

	$router->group('/api', function() use ($router) {
		$router->get('/users', [ ApiExampleController::class, 'getUsers' ]);
		$router->get('/produits', [ MiniTemplateController::class, 'getProduits' ]);
		$router->get('/users/@id:[0-9]', [ ApiExampleController::class, 'getUser' ]);
		$router->post('/users/@id:[0-9]', [ ApiExampleController::class, 'updateUser' ]);


	});
	$router->get('/test', function() use ($app) {
		$db = Flight::db();
		$sql = "SELECT 1";
		

	});


	
}, [ SecurityHeadersMiddleware::class ]);