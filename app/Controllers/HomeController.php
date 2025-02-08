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
        $resultado = $conexionDataBase->consulta("SELECT h.id AS horario_id,  m.nombre AS materia, s.nombre AS salon, e.nombre AS edificio, ho.hora_inicio, ho.hora_fin FROM horarios h JOIN dias d ON h.id_dia = d.id JOIN materias m ON h.id_materia = m.id JOIN salones s ON h.id_salon = s.id JOIN edificios e ON s.id_edificio = e.id JOIN horas ho ON h.id_hora = ho.id WHERE d.dia_nombre = '$dia';")->obtenerResultados();
        return $this->vista('vanessa.mostrarDia', ["dia"=>$dia, "resultado"=>$resultado]);
    }



}