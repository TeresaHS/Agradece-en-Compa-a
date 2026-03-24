<?php

    session_start();

    require 'configdb.php';

    function conectar(){
        $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $conexion->set_charset("utf8");
        return $conexion;
    }

    function selectAgradecer(){
        $conexion=conectar();
        $sql="SELECT puesto,nombre FROM alumnos;";
        $resultado=$conexion->query($sql);
        
        while($fila=$resultado->fetch_array()){

        if($fila["puesto"] == $_SESSION["id"])
            echo '<option value="'.$fila["puesto"].'" disabled>'.$fila["nombre"].'</option>';
        else {

            $sql2 = 'SELECT idReceptor FROM agradecimientos 
                        WHERE idEmisor="'.$_SESSION["id"].'" 
                        AND idReceptor="'.$fila["puesto"].'"';

            $resultado2 = $conexion->query($sql2);
            
            if($resultado2->num_rows > 0)
                echo '<option value="'.$fila["puesto"].'" disabled>'.$fila["nombre"].'</option>';
            else
                echo '<option value="'.$fila["puesto"].'">'.$fila["nombre"].'</option>';
            
        }
    }

        $conexion->close();
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecer</title>
    <link rel="stylesheet" href=".\estilo.css"/>

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
            <a href=".\agradecer.php"><p class="enlaces" id="activo">Agradecer</p></a>
            <a href=".\recibidos.php"><p class="enlaces">Recibir</p></a>
            <a href=".\logout.php"><p class="enlaces">Cerrar Sesión</p></a>
        </nav>
    </header>
    <main id="mainAgradecer">
        <form id="formAgradecer" action=".\agradecerVolver.php" method="get">
            <fieldset id="fieldsetAgradecer">
                <label for="compa">Para:</label>
                <select id="compa" name="compa">
                    <option value="00"></option>
                    <?php
                        selectAgradecer();
                    ?>
                </select>
                <label for="mensaje">Gracias por</label> 
                <textarea id="mensaje" name="mensaje" maxlength="250"></textarea>
                <input type="submit" value="ENVIAR"/>
            </fieldset>
        </form>
    </main>
</body>
</html>