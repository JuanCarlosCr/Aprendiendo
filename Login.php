<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<script type="text/javascript" src="js/sweetalert.min.js"></script>

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
            echo '<script>
                setTimeout(function() {
                    swal({
                        title: "Ingreso Exitoso",                        
                        type: "success"
                    }, function() {
                        window.location = "index.php";
                    });
                }, 500);
            </script>';
        } else {
            echo '<script>
                setTimeout(function() {
                    sweetAlert({
                        title: "Datos erroneos",
                        text: "El nombre de usuario y/o contraseña no son correctos",
                        type: "error"
                    }, function() {
                        window.location = "index.php";
                    });
                }, 100);
            </script>';
        }
    }
}
?> 

