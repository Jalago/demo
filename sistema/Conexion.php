<?php

include_once 'Variables.php';

class Conexion extends Variables {

    private $usuario = null;
    private $password = null;
    private $servidor = null;
    private $puerto = null;
    private $dbname = null;
    private $enlace = null;
    public $data = array();

    public function __construct() {
        $this->servidor = parent::servidor;
        $this->usuario = parent::usuario;
        $this->password = parent::password;
        $this->dbname = parent::basedatos;
        $this->puerto = parent::puerto;
    }

    protected function conectar() {
        $respuesta = array();
        $respuesta['Error'] = false;

        if ($this->enlace == null) {
            $conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->dbname, $this->puerto);
            if (!$conexion) {
                $respuesta['error'] = true;
                $respuesta['mensaje'] = 'No se pudo conectar ' . mysqli_connect_errno() . ' ' . mysqli_connect_error();
            } else {
                $seldb = mysqli_select_db($conexion, $this->dbname);
                if ($seldb === false) {
                    $respuesta['error'] = true;
                    $respuesta['mensaje'] = 'No se pudo seleccionar la base de datos ' . mysqli_connect_errno() . ' ' . mysqli_connect_error();
                } else {
                    $this->enlace = $conexion;
                }
            }
        }
        return $respuesta;
    }

    protected function consultar($sql = '') {
        $respuesta = array();
        $respuesta['error'] = false;
      
        if ($this->enlace == null) {
            $this->conectar();
        }

        $consulta = mysqli_query($this->enlace, $sql);
        if (!$consulta) {
            $respuesta['error'] = true;
            $respuesta['mensaje'] = 'Consulta invalida ' . mysqli_connect_errno() . ' ' . mysqli_connect_error();
            $respuesta['mensaje'] .= ' SQL[ ' . $sql . ']';
        } else {
            $data = array();
            while ($fila = mysqli_fetch_assoc($consulta)) {   
                array_push($data, $fila);
            }
            $respuesta['data'] = $data;
        }
     
        return $respuesta;
    }

    protected function ejecutar($sql = '') {
        $respuesta = array();
        $respuesta['error'] = false;

        if ($this->enlace == null) {
            $this->conectar();
        }

        $consulta = mysqli_query($this->enlace, $sql);

        if (!$consulta) {
            $respuesta['error'] = true;
            $respuesta['mensaje'] = 'Consulta invalida ' . mysqli_connect_errno() . ' ' . mysqli_connect_error();
            $respuesta['mensaje'] .= ' SQL[ ' . $sql . ']';
        }

        return $respuesta;
    }

}
