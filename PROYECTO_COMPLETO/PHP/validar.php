<?php
    
    session_start();

    require 'configdb.php';

    $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $usuario=$_POST["usuario"];
    $password=$_POST["password"];

    $sql = 'SELECT puesto FROM alumnos WHERE usuario="'.$usuario.'" AND password="'.$password.'";';

    $resultado=$conexion->query($sql);

    if($resultado->num_rows>0){
        $fila = $resultado->fetch_array();
        $_SESSION["id"]=$fila["puesto"];
        print_r($_SESSION);
        header('Location: paginaHome.php');
        exit();
    }
    else{
        header('Location: inicioSesionFallo.php');
        exit();
    }

    $conexion->close();
?>