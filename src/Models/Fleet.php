<?php

namespace SquidStellar\Models;

use SquidStellar\Database;

class Fleet{
    private ?int $id;
    private string $spaceship;
    private string $commander;
    private string $message;
    private string $sector;
    private ?string $date;

    private $table = "reports";
    private $database;
 
    public function __construct($id =null,$spaceship ='',$commander='',$message='',$sector='',$date = null){
        $this->id =$id;
        $this->spaceship =$spaceship;
        $this->commander =$commander;
        $this->message =$message;
        $this->sector =$sector;
        $this->date =$date;
            
           

        if(!$this->database){
            $this->database = new Database();
        }
    }
    public function all(){
        $query = $this->database->mysql->query("SELECT * FROM {$this->table}");

        $spaceshipArray = $query->fetchAll();        
    
        $spaceshipList = [];

        foreach ($spaceshipArray as $spaceship){

        $spaceshipItem = new Fleet($spaceship["id"],$spaceship["spaceship"],$spaceship["commander"],$spaceship["message"],$spaceship["sector"],$spaceship["date"]);

        array_push($spaceshipList, $spaceshipItem);
        }

        return $spaceshipList;
    }

    public function getId(){

        return $this->id;
    }

    public function getSpaceship(){

        return $this->spaceship;
    }
    public function getCommander(){
        
        return $this->commander;
    }
    public function getMessage(){

        return $this->message;
    }

    public function getSector(){
        
        return $this->sector;
    }

    public function getDate(){
        
        return $this->date;
    }

    public function save(){

       $this->database->mysql->query("INSERT INTO {$this->table} (`spaceship`, `commander`, `message`, `sector`) VALUES ('$this->spaceship', '$this->commander', '$this->message', '$this->sector')");

    }
    

}