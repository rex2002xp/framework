<?php

namespace core;

/**
 * Description of View
 *
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package core
 */
class View {

    private $_controller;
    private $_config;
    private $_view;
    private $_item;
    private $_template;

    public function __construct(\core\Request $request) {
        $this->_controller = $request->getController();
        $this->_view = $request->getAction();
        $objeto = new \core\Config(FILE_CONFIG_APP);
        $this->_config = $objeto->getConfig();
    }

    public function render($viewname = false, $item = false, $template = false, $controller = false) {
        if ($template == false) {
            $this->_template = $this->_config['application']['nameTemplate'];
        } else {
            $this->_template = $template;
        }
        if ($viewname != false) {
            $this->_view = $viewname;
        }        
        $this->_item = $item;
        if ($controller != false)
        {
            $this->_controller = $controller;
        }
        
        include_once $this->getTemplate();
    }

    private function getTemplate() {
        $pathTemplate = ROOT . "templates" . DS . $this->_template . '.phtml';
        if (is_readable($pathTemplate)) {
            return $pathTemplate;
        } else {
            throw new \Exception("No fue posible cargar la plantilla solicitada.", 10001);
        }
    }

    public function getView() {
        $pathView = ROOT . DS . "application" . DS . "views" . DS . $this->_controller . DS . $this->_view . '.phtml';
        if (is_readable($pathView)) {
            include_once($pathView);
        } else {            
            throw new \Exception("No fue posible carga la vista solicitada.", 10001);
        }
    }
    
    public function getItem() {
        return $this->_item;
    }
    


}

?>
