<?php
/**
 * Punto de entrada de la aplicacion. * 
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @filesource index.php
 */   
$inicio = microtime();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__DIR__)) . DS);
define('FILE_CONFIG_APP', ROOT . 'application' . DS . 'config.ini' );

set_include_path(ROOT);

spl_autoload_register();

try
{
    \core\Bootstrap::run(new \core\Request());
}
catch (Exception $ex)
{
    print_r($ex->getMessage());
}
print_r('</br>');
print_r("Segundos: ");
print_r(microtime()-$inicio);
print_r('</br>');
print_r('Usados:' . memory_get_usage()/1024 . ' Kbyte');

?>