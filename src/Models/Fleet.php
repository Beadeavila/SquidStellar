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

    public function findById($id){

        $query=$this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` ={$id}");

        $result = $query->fetchAll();

        return new Fleet ($result[0]["id"],$result[0]["spaceship"],$result[0]["commander"],$result[0]["message"],$result[0]["sector"],$result[0]["date"]);
 
     }

     public function destroy(){

        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");

     }
   
     
     public function rename($spaceshipNew,$commanderNew,$messageNew,$sectorNew){

        $this->spaceship=$spaceshipNew;
        $this->commander=$commanderNew;
        $this->message=$messageNew;
        $this->sector=$sectorNew;

    }

     public function update(){

        $this->database->mysql->query("UPDATE `{$this->table}` SET `spaceship` = '{$this->spaceship}',`commander` = '{$this->commander}', `message` = '{$this->message}', `sector` = '{$this->sector}' WHERE `ID` = {$this->id}" );

     }
   

}