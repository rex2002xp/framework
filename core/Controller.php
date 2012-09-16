<?php

namespace core;

/**
 * Clase abstracta de la que se extienden todos los controladores.
 * 
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package core
 */
abstract class Controller {
    
    public function __construct() {
        ;
    }
    
    abstract public function index();    
    
}

?>
