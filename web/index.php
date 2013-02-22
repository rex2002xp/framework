<?php
/**
 * Punto de entrada de la aplicacion.
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @filesource index.php
 */

try
{
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__DIR__)) . DS);
    define('FILE_CONFIG_APP', ROOT . 'application' . DS . 'config.ini' );

    set_include_path(ROOT);

    spl_autoload_register();    
    
    \core\Bootstrap::run(new \core\Request());
}
catch (Exception $ex)
{
    $error = new \application\controllers\errorController();
    $error->index($ex->getMessage(), $ex->getCode());
    
}
?>