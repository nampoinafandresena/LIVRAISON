<?php

namespace app\models;
use flight\Flight;
use PDO;
class VehiculeModel{
    
     private $db;

     	public function __construct($db) {
		$this->db = $db;
	}


         public  function getChauffeurs(){
             $stmt = $this->db->query("SELECT * FROM chauffeur");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        

}


?>