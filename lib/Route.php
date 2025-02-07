<?php

/* Aqui manejamos las rutas y decidimos que hacer con ellas y los datos de la URL que escribamos*/

namespace Lib;

class Route
{
    //! Propiedades
    private static $rutas = [];



    //* Metodos para agregar rutas
    public static function agregarRutasGet($ruta, $funcion)
    {
        $ruta = trim($ruta, '/'); //metodo para eliminar los / de la ruta, al principo y al final
        self::$rutas['GET'][$ruta] = $funcion;
    }
    public static function agregarRutasPost($ruta, $funcion)
    {
        $ruta = trim($ruta, '/');
        self::$rutas['POST'][$ruta] = $funcion;
    }


    //~ Metodo para ejecutar las rutas

    public static function ejecutar()
    {
        $rutaEscrita = $_SERVER['REQUEST_URI'];
        $rutaMetodo = $_SERVER['REQUEST_METHOD'];
        $rutaEscrita = trim($rutaEscrita, '/');

        foreach (self::$rutas[$rutaMetodo] as $ruta => $funcion) {


            //? Si la ruta tiene un parametro, se va a reemplazar por una expresion regular
            if (strpos($ruta, ':') !== false) {
                //? Si hay : en nuestra ruta que agregamos, remplazaremos lo que hay despues de : por una expresion regular
                $ruta = preg_replace('#:[a-zA-Z0-9]+#', '([a-zA-Z0-9]+)', $ruta);
            }


            if (preg_match("#^$ruta$#", $rutaEscrita, $coincidencias)) {

                $parametros = array_slice($coincidencias, 1);



                if (is_callable($funcion)) {
                    $respuesta = $funcion(...$parametros);  //? Si la funcion es una funcion anonima, se ejecuta de esta manera
                    return;
                } 

                if(is_array($funcion)){
                    $controller = new $funcion[0];
                    $respuesta = $controller->{$funcion[1]}(...$parametros);

                }

                if (is_array($respuesta) || is_object($respuesta)) {
                    echo json_encode($respuesta);
                    return;
                } else {
                    echo $respuesta;
                    return;
                }
            }
        }
        echo 'Ruta no encontrada';
    }
}
