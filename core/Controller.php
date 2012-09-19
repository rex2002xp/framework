<?php

namespace core;

/**
 * Clase abstracta de la que se extienden todos los controladores.
 * 
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package core
 */
abstract class Controller {
    public $twig_loader;
    public $twig_config;
    public $view;
    public function __construct() {        
        $configFile = new \core\Config(FILE_CONFIG_APP);
        $configuration = $configFile->getConfig();
        $pathLoaderTwig = $configuration['application']['pathTemplate'] . DS . $configuration['application']['nameTemplate'] . DS;
        $pathCacheTwig = $configuration['application']['pathCache'] . DS ;        
        $this->twig_config = $configuration['twig'];        
        $this->twig_loader = new \Twig_Loader_Filesystem($pathLoaderTwig);
        
        /* Se genera el objeto de Twig para manejas las vistas */
        $this->view = new \Twig_Environment($this->twig_loader, $this->twig_config);
        
        
        
    }
    
    abstract public function index();    
    
}

?>
