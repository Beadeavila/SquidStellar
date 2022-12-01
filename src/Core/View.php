<?php

namespace SquidStellar\Core;

class View{
    public function __construct($view, $data = null){
        require_once("src/Views/$view.php");
    }
    
        
    
}