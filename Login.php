<?php

session_start();
//echo $_SESSION['userid'];
include_once "Conexion.php";

function verificar_login($user, $password, &$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysql_query($sql);
    $count = 0;
    while ($row = mysql_fetch_object($rec)) {
        $count++;
        $result = $row;
    }
    if ($count == 1) {
        return 1;
    } else {
        return 0;
    }
}

//if (!isset($_SESSION['userid'])) {
//    if (isset($_POST['ingresarPagina'])) {
//        if (verificar_login($_POST['nombreUsuario'], $_POST['password'], $result) == 1) {
//            $_SESSION['userid'] = $result->idusuario;
//            echo 'Ha ingresado a la pagina';
//            echo '<a href="Logout.php"> Logout </a>';
//            require 'index.php';
//        } else {
//            echo 'Datos erroneos intente nuevamente';
//            require 'index.php';
//        }
//    }
//}
if (!isset($_SESSION['userid'])) {
    if (isset($_POST['ingresarPagina'])) {
        if (verificar_login($_POST['nombreUsuario'], $_POST['password'], $result) == 1) {
            $_SESSION['userid'] = $_POST['nombreUsuario'];
            echo 'Ha ingresado a la pagina';
            echo '<a href="Logout.php"> Logout </a>';
//            header("Location:index.php");
//            exit();
            require 'index.php';
        } else {
            echo 'Datos erroneos intente nuevamente';
            require 'index.php';
        }
    }
}
?> 

