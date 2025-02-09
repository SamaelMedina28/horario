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
        $resultados = $conexionDataBase->consulta("SELECT h.id AS horario_id,  m.nombre AS materia, s.nombre AS salon, e.nombre AS edificio, ho.hora_inicio, ho.hora_fin FROM horarios h JOIN dias d ON h.id_dia = d.id JOIN materias m ON h.id_materia = m.id JOIN salones s ON h.id_salon = s.id JOIN edificios e ON s.id_edificio = e.id JOIN horas ho ON h.id_hora = ho.id WHERE d.dia_nombre = '$dia';")->obtenerResultados();
        return $this->vista('vanessa.mostrarDia', ["dia"=>$dia, "resultados"=>$resultados]);
    }

    public function mostrarInfo($dia)
    {
        $conexionDataBase = new dabaBase();
        $resultados = $conexionDataBase->consulta("SELECT Materias.nombre AS materia, Salones.nombre AS salon, Edificios.nombre AS edificio, Dias.dia_nombre, Horas.hora_inicio, Horas.hora_fin FROM Horarios JOIN Materias ON Horarios.id_materia = Materias.id JOIN Salones ON Horarios.id_salon = Salones.id JOIN Edificios ON Salones.id_edificio = Edificios.id JOIN Dias ON Horarios.id_dia = Dias.id JOIN Horas ON Horarios.id_hora = Horas.id WHERE Materias.nombre = 'Lenguaje C' AND Dias.dia_nombre = 'Viernes';")->obtenerResultados();
        
        return $this->vista('vanessa.mostrarInfo', [ "diaInfo"=>$dia, "resultados"=>$resultados]);
    }



}