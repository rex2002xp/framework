<?php
namespace core;

/**
 * Clase para manejar las peticiones.
 *
 * Todas las peticion debe contener una estructura basica 
 * como [direccion]/Controlador/Action/parametros...
 * 
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package core
 */
class Request {
    
    private $_controller;
    private $_action;
    private $_parameters;
    
    /**
     * Objeto que representa la peticion.
     * 
     */
    public function __construct() {
        
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);        
        $url = explode('/', $url);
        $url = array_filter($url);
        
        $this->_controller = strtolower(array_shift($url));
        $this->_action = strtolower(array_shift($url));
        $this->_parameters = $url;
        
        $config = new \application\Config();
        
        if(!$this->_controller){
            $this->_controller = $config->getDefaultController();
        }
        
        if(!$this->_action){
            $this->_action = $config->getDefaultAction();
        }
        
        if(!isset($this->_parameters)){
            $this->_parameters = array();
        }
    }
    
    /**
     * Metodo para retornar el nombre del controlador solicitado.
     * 
     * @return string 
     */
    public function getController()
    {
        return $this->_controller;
    }
    
    /**
     * Metodo para retornar el nombre de la accion solicitada.
     * 
     * @return string
     */
    public function getAction()
    {
        return $this->_action;
    }
    
    /**
     * Metodo para retornar los parametros de la peticion.
     * 
     * @return array
     */
    public function getParameters()
    {
        return $this->_parameters;
    }
}

?>
