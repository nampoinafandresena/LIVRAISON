<?php

namespace app\controllers;

use Flight;
use PDO;

use flight\Engine;
use app\models\ProduitModel;

class MiniTemplateController {
    protected Engine $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function getProduits() {
        $produitsModel = new ProduitModel(Flight::db());
        $produits = $produitsModel->getProduits();
        return $produits;
        
        // Flight::render('mini-termplate', $data);
    }

    public function getProduit($id) {
        $produitsModel = new ProduitModel(Flight::db());
        $produit = $produitsModel->getProduit($id);
        // $this->app->json($produits, 200, true, 'utf-8', JSON_PRETTY_PRINT);
        return $produit;
    }

    public function addProduit() {
        
    }

}