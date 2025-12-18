<?php

namespace app\models;
use flight\Flight;
use PDO;
class LivraisonModel{
    
     private $db;
  
     	public function __construct($db) {
		$this->db = $db;
	}


         public  function getAll(){
             $stmt = $this->db->query("SELECT * FROM livraison");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
 
}