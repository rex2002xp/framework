<?php

namespace application;

/**
 * Objeto para administrar los parametros de configuracion de la aplicacion.
 *
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package applicacion
 */
class Config {
    
    private $_defaultController;
    private $_defaultAction;
    private $_hash_key;

    /**
     * Objeto para administrar los parametros de configuracion de la aplicacion.
     */
    function __construct() {
        $this->_defaultController = 'home';
        $this->_defaultAction = 'index';
        $this->_hash_key = 'asdesfres';
    }
    
    /**
     * Retorna el Controlador por Default.
     * 
     * @return string
     */
    public function getDefaultController()
    {
        return $this->_defaultController;
    }
    
    /**
     * Retorna la action por Default.
     * 
     * @return string
     */
    public function getDefaultAction()
    {
        return $this->_defaultAction;
    }
}

?>
