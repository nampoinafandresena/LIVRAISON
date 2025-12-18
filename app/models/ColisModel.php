<?php

namespace app\models;
use flight\Flight;
use PDO;
class ColisModel{
    
     private $db;

     	public function __construct($db) {
		$this->db = $db;
	}


         public  function getAll(){
             $stmt = $this->db->query("SELECT * FROM colis");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        

}