<?php

require_once 'DataBase.php';

if (isset($_POST['registrarsePagina'])) {
    $db = new Database();
    $db->conectar();
    if ($_POST['pass'] == $_POST['repetirPass']) {
        $db->insertar(array(0, $_POST['NombreUsuario'], $_POST['pass']), "usuarios");
        header("location:index.php");
    } else {
        echo 'Contraseñas no coinciden';
        require_once 'index.php';
    }
}

if (isset($_POST['enviarComentario'])) {
    $db = new Database();
    $db->conectar();
    $db->insertar(array(0, $_POST['Nombre'], $_POST['comentarios']), "comentarios");
    header("location:index.php");
}

if (isset($_POST['enviarCotizacion'])) {
    $db = new Database();
    $db->conectar();
    $db->insertar(array(0, $_POST['categoriaCurso'], $_POST['tipoCurso'], $_POST['idiomaCurso'], $_POST['tipoAlojamiento'], $_POST['paisCurso'], $_POST['ciudadCurso'], $_POST['fechaInicio'], $_POST['duracionCurso']), "cotizacion");
}

if (isset($_POST['enviarCotizacion'])) {
    $db = new Database();
    $db->conectar();
    $db->insertar(array($_POST['documentoCliente'], $_POST['nombreCliente'], $_POST['apellidoCliente'], $_POST['generoCliente'], $_POST['edadCliente'], $_POST['direccionCliente'], $_POST['telefonoCliente'], $_POST['celularCliente']), "cliente");
    header("location:SolicitarCotizacion.php");
}
?>
