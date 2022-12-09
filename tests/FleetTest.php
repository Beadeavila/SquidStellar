<?php

namespace tests;

use PHPunit\Framework\TestCase;
use SquidStellar\Models\Fleet;


class FleetTest extends TestCase{

     public function test_testOk(){

        $this->assertEquals(1,1);
    
    }

    /*hacemos un test para cada GETTER del Models*/

    public function test_ifGetSpaceshipWorksCorrectly(){
    
        //Given -- actores de una pelicula = que nos devuelva el usuario

        $newFleet = new Fleet(null,"SSV Normandy","Commander Shepard","Life has been purged","Hawking eta",null);


        //When -- rodaje de la peli = variables

        $resultGetSpaceship = $newFleet->getSpaceship();


        //Then -- la crítica de esa peli = lo hacemos con los asserts
        $this->assertEquals("SSV Normandy", $resultGetSpaceship);
    }

    public function test_ifGetCommanderWorksCorrectly(){
    
        //Given -- actores de una pelicula = que nos devuelva el usuario

        $newFleet = new Fleet(null,"SSV Normandy","Commander Shepard","Life has been purged","Hawking eta",null);


        //When -- rodaje de la peli = variables

        $resultGetCommander = $newFleet->getCommander();


        //Then -- la crítica de esa peli = lo hacemos con los asserts
        $this->assertEquals("SSV Normandy", $resultGetCommander);
    }

    public function test_ifGetMessageWorksCorrectly(){
    
        //Given -- actores de una pelicula = que nos devuelva el usuario

        $newFleet = new Fleet(null,"SSV Normandy","Commander Shepard","Life has been purged","Hawking eta",null);


        //When -- rodaje de la peli = variables

        $resultGetMessage = $newFleet->getMessage();


        //Then -- la crítica de esa peli = lo hacemos con los asserts
        $this->assertEquals("SSV Normandy", $resultGetMessage);
    }

    public function test_ifGetSectorWorksCorrectly(){
    
        //Given -- actores de una pelicula = que nos devuelva el usuario

        $newFleet = new Fleet(null,"SSV Normandy","Commander Shepard","Life has been purged","Hawking eta",null);


        //When -- rodaje de la peli = variables

        $resultGetSector = $newFleet->getSector();


        //Then -- la crítica de esa peli = lo hacemos con los asserts
        $this->assertEquals("Hawking eta", $resultGetSector);
    }
   

}

?>