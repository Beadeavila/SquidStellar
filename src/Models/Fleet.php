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
    private ?string $Date;

    private $table = "squidfleet";
    private $database;


    public function __construct($id =null,$spaceship ='',$commander='',$message='',$sector='',$image='',$date = null
    )
    {
        $this->id =$id;
        $this->spaceship =$spaceship;
        $this->commander =$commander;
        $this->message =$message;
        $this->sector =$sector;
        $this->image =$image;
        $this->date =$date;

        if(!$this->database){
            $this->database = new Database();
        }
    }
}

?>