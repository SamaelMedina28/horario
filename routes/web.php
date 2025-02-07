<?php

/* Aqui se agregan rutas de nuestra pagina */

use Lib\Route;
use App\Controllers\HomeController;

Route::agregarRutasGet('/', [HomeController::class, 'index']);

Route::agregarRutasGet('/lunita', [HomeController::class, 'Vanessa']);

Route::agregarRutasPost('/lunita/:dia', [HomeController::class, 'mostrarDia']);






//!Pasandole parametros a la ruta atra vez de una FUNCION   (no se recomienda),  es mejor con un controlador
/* Route::agregarRutasGet('/cursos/:tituloCurso/:titulodos', function($parametro, $parametro2){
    echo 'Hola mundo desde cursos 2 '. $parametro . ' ' . $parametro2;
}); */


Route::ejecutar();
