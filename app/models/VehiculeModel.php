<?php

namespace app\models;
use flight\Flight;
use PDO;
class VehiculeModel{
    
     private $db;

     	public function __construct($db) {
		$this->db = $db;
	}


         public  function getVehicules(){
             $stmt = $this->db->query("SELECT * FROM vehicule");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getListeJournee(){
             $stmt = $this->db->query( "
        SELECT
            DATE(t.debut_trajet) AS jour,
            CONCAT(v.id_vehicule, ' ', v.immatriculation) AS vehicule,
            CONCAT(c.id_chauffeur, ' ', c.nom) AS chauffeur
        FROM trajet t
        JOIN vehicule v ON v.id_vehicule = t.id_vehicule
        JOIN chauffeur c ON c.id_chauffeur = t.id_chauffeur
        GROUP BY jour, v.id_vehicule, c.id_chauffeur
    ");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getBeneficeParVehicule(){
            $stmt = $this->db->query( "
     SELECT
    v.id_vehicule,
    v.immatriculation,
    SUM(t.recette - t.carburant) AS benefice
FROM
    trajet t
JOIN
    vehicule v ON t.id_vehicule = v.id_vehicule
GROUP BY
    v.id_vehicule, v.immatriculation
    ");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getBeneficeJournee(){
           $stmt = $this->db->query( "
  SELECT 
    DATE(t.debut_trajet) AS jour,
    SUM(recette - carburant) AS benefice
FROM trajet t
GROUP BY jour
    ");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getTrajetsRentables(){
            $stmt = $this->db->query( "SELECT 
    DATE(debut_trajet) AS jour,
    t.id_trajet,
    (t.recette - t.carburant) AS benefice
FROM trajet t
WHERE (t.recette - t.carburant) = (
    SELECT 
        MAX(t2.recette - t2.carburant) 
    FROM trajet t2
    WHERE DATE(t2.debut_trajet) = DATE(t.debut_trajet)
)

    ");
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


}


?>