<?php
/**
 * Description of appexception
 *
 * @author vc34880
 */
namespace core;
class AppException extends \Exception {
    
    public function __construct($message, $code, $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        parent::__toString();        
    }
}

?>
