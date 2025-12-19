<?php

namespace app\models;
use flight\Flight;
use PDO;
class StatusModel{
    
     private $db;

     	public function __construct($db) {
		$this->db = $db;
	}


         public  function getAll(){
             $stmt = $this->db->query("SELECT * FROM status");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        public function getStatusByIdLivraison($id){
            $stmt = $this->db->prepare("SELECT * FROM v_status_livraison where id_livraison = :id");
            $stmt->execute([':id'=>$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

}