<?php
namespace app\controllers;

use flight\Engine;
use app\models\ColisModel;
use Flight;
class ColisController{
    	protected Engine $app;
        protected ColisModel $colis;
	public function __construct($app) {
		$this->app = $app;
        $this->colis = new ColisModel(Flight::db());
	}

   public function allColis(){
      $allcolis = $this->colis->getAll();
      $app->render('listecolis',['colis' => $allcolis]);
   }
}

?>