<?php

namespace core;

/**
 * Objeto para invocar la aplicacion.
 * 
 * Clase que contiene el metodo que inicia la Aplicacion, esta clase unicamente
 * tiene el metodo Run.
 * 
 * @author Victor Hugo Cornejo Calderon <victor.cornejo@iguanadas.com>
 * @package core
 */
class Bootstrap {

    /**
     * Metodo para ejecutar la aplicacion.
     * 
     * Permite iniciar la aplicacion, analiza el objeto Request.
     * Valida que el controlador y la accion solicitada se puedan cargar de lo contrario genera
     * un error que luego es enviado al usuario.
     * 
     * @param Request $request
     * @throws Exception
     */
    public static function Run(Request $request) {

        $controllerName = '\application\controllers\\' . $request->getController() . 'Controller';
        $action = $request->getAction();
        $parameters = $request->getParameters();

        
        if (class_exists($controllerName)) {            
            $controller = new $controllerName;
            if (is_callable(array($controller, $action))) {
                $action = $request->getAction();
            } else {
                throw new \Exception("Ruta no valida",1002);
            }
            if (isset($parameters)) {
                call_user_func_array(array($controller, $action), $parameters);
            } else {
                call_user_func(array($controller, $action));
            }
        }
    }
}
?>
