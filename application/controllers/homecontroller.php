<?php
namespace application\controllers;

/**
 * Controlador Default.
 *
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package application\controllers
 */
class homeController extends \core\Controller{
    
    public function __construct() {
        parent::__construct();        
    }

    public function index() { 
        $this->_view->render();
    }
    
    public function begin()
    {
        $this->_view->title = "Dashboard";
        $this->_view->render("index");
    }
}

?>
