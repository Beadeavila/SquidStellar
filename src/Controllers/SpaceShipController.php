<?php

namespace SquidStellar\Controllers;

use SquidStellar\Core\View;
use SquidStellar\Models\Fleet;

class SpaceShipController{

    public function __construct(){

        if(isset($_GET["action"]) && ($_GET["action"] == "create")){
   
            $this->create();
            return;
        }    
        
        if(isset($_GET["action"]) && ($_GET["action"] == "store")){
            
            $this->store($_POST);
            return;
        }


        if(isset($_GET["action"]) && ($_GET["action"] == "delete")){

            $this->delete($_GET["id"]);
            return;
        }
            $this->index();

    }

    public function index(){
       
        $spaceship = new Fleet;

        $fleet = $spaceship->all();

        new View("spaceshipList",["spaceship" => $fleet]);
        
    }

    public function create(){

        new View("createReport");

    }

    public function store(array $request){

        $newSpaceship = new Fleet(null,$request["spaceship"],$request["commander"],$request["message"],$request["sector"],null);

        $newSpaceship->save();

        $this->index();

    }

    public function delete($id){

        $spaceshipHelper = new Fleet();

        $fleet = $spaceshipHelper -> findById($id);

        $fleet->destroy(); 
        $this->index();   

    }



}

?>