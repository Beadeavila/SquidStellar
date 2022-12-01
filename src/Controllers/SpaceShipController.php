<?php

namespace SquidStellar\Controllers;
use SquidStellar\Core\View;
use SquidStellar\Models\Fleet;

class SpaceShipController{
    public function __construct(){
        $this->index();


    }
    public function index(){
        echo "estas en el controlador";
        $spaceship = new Fleet;

        $fleet = $spaceship->all();

        new View("spaceshipList",["spaceship" => $fleet]);
        
    }
}

?>