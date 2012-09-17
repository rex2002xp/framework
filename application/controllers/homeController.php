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
        include_once ROOT . 'lib' . DS . 'Twig' . DS . 'Autoloader.php';
        \Twig_Autoloader::register();
        $path = ROOT . 'templates' . DS . 'default'.DS;
        $loader = new \Twig_Loader_Filesystem($path);
        $twig = new \Twig_Environment($loader, array('cache' => ROOT . 'cache','debug'=>true,));
        
        $template = $twig->loadTemplate('index.html.twig');        
        echo $twig->render('index.html.twig', array('name' => 'Fabien'));
    }
}

?>
