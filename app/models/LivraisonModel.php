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
             $stmt = $this->db->query("SELECT * FROM v_liste_livraison");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getAllenattente(){
           $stmt = $this->db->query("SELECT * FROM v_status_livraison where status = 1");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function livrer($idlivraison){
           $stmt = $this->db->prepare("UPDATE livraison SET id_status = 2 where id_livraison = :id");
           $stmt->execute([':id'=>$idlivraison]);
        }
        public function annuler($idlivraison){
            $stmt = $this->db->prepare("UPDATE livraison SET id_status = 3 where id_livraison = :id");
           $stmt->execute([':id'=>$idlivraison]);
        }
        
 
}