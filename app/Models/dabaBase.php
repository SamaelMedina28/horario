<?php 

namespace App\Models;

use mysqli; 

class dabaBase
{
    protected $user = 'root';
    protected $password = '';
    protected $db = 'horario';
    protected $host = 'localhost';

    protected $conexion;

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
}