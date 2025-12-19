<?php

use app\controllers\ApiExampleController;
use app\controllers\ColisController;
use app\controllers\LivraisonController;
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
		// makany am liste colis
	$router->get('/colis/liste',[ColisController::class,'allcolis']);

		//makany am formulaire colis
	$router->get('/colis/form',function() use ($app){
		$app->render('formcolis');
	});	

		//mampanao insert colis
	$router->post('/colis/insert',[ColisController::class,'insertColis']);

		//makany am liste livraison
	$router->get('/livraison/liste',[LivraisonController::class,'alllivraison']);
	
	//makany am liste livraison en attente
	$router->get('/livraison/attente',[LivraisonController::class,'allattente']);

	//milivrer livraison
	$router->get('/livraison/livrer/@id:[0-9]+',[LivraisonController::class,'livrer']);

	//miannuler livraison
	$router->get('/livraison/annuler/@id:[0-9]+',[LivraisonController::class,'annuler']);
	


	
}, [ SecurityHeadersMiddleware::class ]);