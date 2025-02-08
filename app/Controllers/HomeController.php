<?php

namespace App\Controllers;

use App\Models\dabaBase;

class HomeController extends Controller
{
    public function index()
    {
        return $this->vista('home', ["parametro1"=>"valor 1", "parametro2"=>"valor 2"]);
    }

    public function Vanessa()
    {
        return $this->vista('vanessa.dias');
    }

    public function mostrarDia($dia)
    {
        $conexionDataBase = new dabaBase();
        
        return $this->vista('vanessa.mostrarDia', ["dia"=>$dia]);
    }



}