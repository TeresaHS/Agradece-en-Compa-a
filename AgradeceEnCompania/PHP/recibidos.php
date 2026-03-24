<?php

    session_start();

    require 'configdb.php';

    function conectar(){
        $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8");
        return $conexion;
    }

    function listado(){

        $conexion=conectar();
        $id = $_SESSION["id"];
        $sql = "SELECT idAgradecimiento, idEmisor FROM agradecimientos WHERE idReceptor = '$id'";
        $resultado=$conexion->query($sql);

        

        while($fila=$resultado->fetch_array()){

            $sql2 = "SELECT nombreJesuita FROM alumnos WHERE puesto = '".$fila["idEmisor"]."';";

            $resultado2=$conexion->query($sql2);
            $nombre=$resultado2->fetch_array();

           echo '<section class="mensaje">';
           echo '<div class="codigoMensaje"><p>#'.$fila["idAgradecimiento"].'</p></div>';
           echo '<p class="cabeceraMensaje"><span class="nombreJes">'.$nombre["nombreJesuita"].'</span> te ha mandado un agradecimiento</p>';
           echo '<div class="verMensaje"><p>Ver Mensaje</p></div>';
           echo '</section>';

        }

        $conexion->close();

    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibidos</title>
    <link rel="stylesheet" href=".\estilo.css"/>
    <!--<meta http-equiv="refresh" content="5">-->

    <!-- Las siguientes lineas son para tener la fuente de Montserrat de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <a href=".\paginaHome.html"><h1><span class="mayusTitulo">A</span>GRADECE <span id="minusTitulo">EN</span> <span class="mayusTitulo">C</span>OMPAÑÍA</h1></a>
        <hr id="linea">
        <nav>
            <a href=".\agradecer.php"><p class="enlaces">Agradecer</p></a>
            <a href=".\recibidos.php"><p class="enlaces" id="activo">Recibir</p></a>
            <a href=".\logout.php"><p class="enlaces">Cerrar Sesión</p></a>
        </nav>
    </header>
    <main>
        <?php
            
            listado();
            
        ?>
    </main>
</body>
</html>

