<?php
namespace app\controllers;

use flight\Engine;
use app\models\LivraisonModel;
use Flight;
class LivraisonController{
    	protected Engine $app;
        protected LivraisonModel $livraison;
	public function __construct() {
	    $this->livraison = new LivraisonModel(Flight::db());
	}

   public function alllivraison(){
      $alllivraison = $this->livraison->getAll();
      Flight::render('listelivraison',['livraison' => $alllivraison]);
   }
     public function allattente(){
      $alllivraison = $this->livraison->getAllenattente();
      Flight::render('listeattente',['livraison' => $alllivraison]);
   }

     public function livrer($id){
        $this->livraison->livrer($id);
    $alllivraison = $this->livraison->getAll();
      Flight::render('listelivraison',['livraison' => $alllivraison]);
   }

    public function annuler($id){
        $this->livraison->annuler($id);
    $alllivraison = $this->livraison->getAll();
      Flight::render('listelivraison',['livraison' => $alllivraison]);
   }

}

?>