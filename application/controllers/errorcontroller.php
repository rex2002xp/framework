<?php
namespace application\controllers;
/**
 * Description of errorcontroller
 *
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 */

class errorController  {
    
    public function __construct() {
        //parent::__construct();
    }
   
    public function index($message, $errorId=NULL, $severity=NULL) {
        echo printf('Mensaje de Error : %s', $message);
        echo printf('Identificador : %s', $errorId);
        echo printf('Severidad : %s', $severity);
    }
}

?>
