<?php

class Database {

    private $usuario;
    private $contraseña;
    private $servidor;
    private $nomBD;
    private $link;

    function DataBase() {
        $this->usuario = "root";
        $this->contraseña = "12345678";
        $this->servidor = "localhost";
        $this->nomBD = "aprendiendo";
        $this->link = "";
    }

    function conectar() {
        $this->link = mysql_connect($this->servidor, $this->usuario, $this->contraseña);
        mysql_select_db($this->nomBD, $this->link);
    }

    function insertar($fila = array(), $Tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysql_query(" insert into " . $Tabla . " values (" . $valoresFila . ") ")or die('La Consulta Fallo' . mysql_error());
    }

    function consultar($tabla = "", $campo = "", $dato = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else if ($dato == "") {
            $query = "select " . $campo . " from " . $tabla;
        } else {
            $query = "select * from " . $tabla . " where " . $campo . " = " . $dato;
        }
        $res = mysql_query($query);
        return $res;
    }
}

?>