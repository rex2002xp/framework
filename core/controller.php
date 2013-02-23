<?php

namespace core;

/**
 * Clase abstracta de la que se extienden todos los controladores.
 * 
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package core
 */
abstract class Controller {
    protected $_view;
    
    public function __construct() {        
        $configFile = new \core\Config(FILE_CONFIG_APP);
        $configuration = $configFile->getConfig();
        
        $this->_view = new \core\View(new \core\Request);
    }
    
    abstract public function index();    
    
}

?>
