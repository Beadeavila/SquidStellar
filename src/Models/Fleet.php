<?php

namespace SquidStellar\Models;

use SquidStellar\Database;

//estas variables puede que vayan en minúsculas
class Fleet{
    private ?int $id;
    private string $spaceship;
    private string $commander;
    private string $message;
    private string $sector;
    private string $image;
    private ?string $date;

    private $table = "squidfleet";
    private $database;
 
    public function __construct($id =null,$spaceship ='',$commander='',$message='',$sector='',$image='',$date = null
    ){
        $this->id =$id;
        $this->spaceship =$spaceship;
        $this->commander =$commander;
        $this->message =$message;
        $this->sector =$sector;
        $this->image =$image;
        $this->date =$date;
echo "estoy en el modelo coder";
        if(!$this->database){
            $this->database = new Database();
        }
    }
    public function all(){
        $query = $this->database->mysql->query("SELECT * FROM {$this->table}");
        $spaceshipArray = $query->fetchAll();
        
    
    $spaceshipList = [];

    foreach ($spaceshipArray as $fleet){
        $spaceshipItem = new Spaceship($fleet["id"],$fleet["spaceship"],$fleet["commander"],$fleet["message"],$fleet["sector"],$fleet["image"],$fleet["date"]);
        array_push($spaceshipList, $spaceshipItem);
        }
    return $spaceshipList;
    }
}