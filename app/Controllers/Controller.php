<?php

namespace App\Controllers;

class Controller
{
    public function vista($ruta, $parametroOpcional= [])
    {
        extract($parametroOpcional);
        if (file_exists("../resources/views/$ruta.php")) {
            ob_start();
            require_once "../resources/views/$ruta.php";
            $vista = ob_get_clean();
            return $vista;
        } else {
            echo "La pagina no existe";
        }
    }
}