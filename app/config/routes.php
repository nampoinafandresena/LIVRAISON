<?php

use app\controllers\ApiExampleController;
use app\controllers\TaxiBeController;
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

	$router->get('/taxibe', function() use ($app) {
		$model = new TaxiBeController($app);
		$vehicules = $model->getVehicules();
		$app->render('accueil', ['vehicules'=> $vehicules]);
	});
		$router->get('/journee', function() use ($app) {
		$model = new TaxiBeController($app);
		$resultats = $model->getListeJournaliere();
		$app->render('listejournaliere', ['resultats'=> $resultats]);
	});
	$router->get('/vehicule/benefices', function() use ($app) {
		$model = new TaxiBeController($app);
		$resultats = $model->getBeneficeVehicules();
		$app->render('benefices', ['benefices'=> $resultats]);
	});
		$router->get('/journee/benefices', function() use ($app) {
		$model = new TaxiBeController($app);
		$resultats = $model->getBeneficeJournee();
		$app->render('beneficejournee', ['benefices'=> $resultats]);
	});
		$router->get('/trajet/rentable', function() use ($app) {
		$model = new TaxiBeController($app);
		$resultats = $model->getTrajetsRentables();
		$app->render('trajetsrentables', ['resultats'=> $resultats]);
	});
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