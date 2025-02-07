<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return $this->vista('home', ["parametro1"=>"valor 1", "parametro2"=>"valor 2"]);
    }

    public function Vanessa()
    {
        return $this->vista('vanessa/dias');
    }

    public function mostrarDia($dia)
    {
        echo "El dia es: $dia";
    }



}