<?php
namespace app\controllers;

use flight\Engine;
use app\models\VehiculeModel;
use app\models\ChauffeurMddel;
use Flight;
class TaxiBeController{
    	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

      public  function getVehicules(){
            $vehicule = new VehiculeModel(Flight::db());
            $vehicules = $vehicule->getVehicules();
            return $vehicules;
        }

      public  function getChauffeurs(){
            $chauffeurs = new ChauffeurModel(Flight::db());
            $chauffeurs =$chauffeurs->getChauffeurs();
            return $chauffeurs;
        }
      public function getListeJournaliere(){
             $liste = new VehiculeModel(Flight::db());
            $liste =$liste->getListeJournee();
            return $liste;
      }
      public function getBeneficeVehicules(){
             $liste = new VehiculeModel(Flight::db());
            $liste =$liste->getBeneficeParVehicule();
            return $liste;
      }
      public function getBeneficeJournee(){
              $liste = new VehiculeModel(Flight::db());
            $liste =$liste->getBeneficeJournee();
            return $liste;
      }
      public function getTrajetsRentables(){
               $liste = new VehiculeModel(Flight::db());
            $liste =$liste->getTrajetsRentables();
            return $liste;
      }
}

?>