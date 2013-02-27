<?php
namespace application\controllers;
/**
 * Description of errorcontroller
 *
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 */

class errorController extends \core\Controller {
    
    public function __construct() {
        parent::__construct();        
    }
   
    public function index() {
    }
    
    public function system(\Exception $Exception) {
        $item['code'] = $Exception->getCode();
        $item['message'] = $Exception->getMessage();
        
        $this->_view->render('app',$item,false,'error');
    }
    
    public function app(\core\AppException $Exception) {
        $item['code'] = $Exception->getCode();
        $item['message'] = $Exception->getMessage();        
        $this->_view->render('app',$item,false,'error');
    }
}

?>
