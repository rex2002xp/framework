<?php
namespace application\controllers;

/**
 * Controlador para administracion de perfil.
 *
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package application\controllers
 */
class profileController extends \core\Controller{
    
    public function __construct() {
        parent::__construct();        
    }

    public function index() {
        $this->_view->title = "Profile";
        $this->_view->render();
    }
	
	public function login() {
		$this->_view->render("login", false, "login", "profile");
	}
}

?>
