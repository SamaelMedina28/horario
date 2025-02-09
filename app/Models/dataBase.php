<?php 

namespace App\Models;

use mysqli; 

class dataBase
{
    protected $user = 'root';
    protected $password = '';
    protected $db = 'horario';
    protected $host = 'localhost';

    protected $conexion;
    protected $resultado;

    public function __construct()
    {
        $this->conexion();
    }

    public function conexion()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->db);
        if($this->conexion->connect_error){
            die('Error de conexion '.$this->conexion->connect_error);
        }
    }

    public function consulta($sql)
    {
        $this->resultado = $this->conexion->query($sql);
        return $this;
    } 

    public function obtenerResultados()
    {
        return $this->resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerResultado()
    {
        return $this->resultado->fetch_assoc();
    }




}