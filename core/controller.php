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
        $request = new \core\Request;
        $this->_view = new \core\View($request);
        $this->_view->title = ucwords($request->getAction());
    }
    
    abstract public function index();    
    
}

?>
