<?php 

namespace app\models;

use Flight;
use PDO;

class ProduitModel {

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getProduits() {
        $produits = $this->db->query("SELECT * FROM produit");
        return $produits->fetchAll();
    }

    public function getProduit($id) {
        $st = $this->db->prepare("SELECT * FROM produit WHERE id = ?");
        $st-> execute([$id]);
        $produit = $st->fetch();
        return $produit;
    }

    

    // public function getProduits() {
    //     $produits = [
	// 		[ 'id' => 1, 'name_product' => 'Produit 1', 'prix' => '27 000 AR', 'img' => '1.jpg' ],
	// 		[ 'id' => 2, 'name_product' => 'Produit 2', 'prix' => '27 000 AR', 'img' => '2.jpg' ],
	// 		[ 'id' => 3, 'name_product' => 'Produit 3', 'prix' => '27 000 AR', 'img' => '3.jpg' ],
	// 	];
    //     return $produits;
    // }

    // public function getProduit($id) { 
    //     $produits = [
	// 		[ 'id' => 1, 'name_product' => 'Produit 1', 'prix' => '27 000 AR', 'img' => '1.jpg' ],
	// 		[ 'id' => 2, 'name_product' => 'Produit 2', 'prix' => '27 000 AR', 'img' => '2.jpg' ],
	// 		[ 'id' => 3, 'name_product' => 'Produit 3', 'prix' => '27 000 AR', 'img' => '3.jpg' ],
	// 	];
    //     return $produits[$id-1];
    // }
}

?>