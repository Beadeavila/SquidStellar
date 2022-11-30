<?php

namespace SquidStellar\Models;

use SquidStellar\Database;

//estas variables puede que vayan en minúsculas
class Fleet{
    private ?int $id;
    private string $Spaceship;
    private string $Commander;
    private string $Message;
    private string $Sector;
    private string $Image;
    private ?string $dateTime;

    private $table = "squidfleet";
    private $database;


    public function __construct($id =null,$SpaceShip ='',$Commander='',$Message='',$Sector='',$Image='',$dateTime = null
    )
    {
        $this->id =$id;
        $this->spaceship =$Spaceship;
        $this->commander =$Commander;
        $this->message =$Message;
        $this->sector =$Sector;
        $this->image =$Image;
        $this->dateTime =$dateTime;

        if(!$this->database){
            $this->database = new Database();
        }
    }
}

?>