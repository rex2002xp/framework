<?php

namespace core;

/**
 * Objeto para administrar los parametros de configuracion de la aplicacion.
 *
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package core
 */
class Config {    
    
    private $_file;
    
    /**
     * Objeto para administrar los parametros de configuracion de la aplicacion.
     */
    function __construct($filePath) {
        $this->_file = parse_ini_file($filePath, true);
    }
    
    /**
     * Se obtiene una matriz multidimesional, con los nombres de las secciones 
     * y las configuraciones incluidas.
     * 
     * @return array()
     */    
    public function getConfig()
    {
        return $this->_file;
    }
}

?>
