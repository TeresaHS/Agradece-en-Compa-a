<?php

session_start();

/*Recomendacion de como borrar correctamente todos los datos de la sesion que tengo activa*/

if (session_status() === PHP_SESSION_ACTIVE)
    $_SESSION = array();    // Limpiar todas las variables de sesión


if (isset($_COOKIE[session_name()])) 
    setcookie(session_name(), '', time() - 3600, '/');  // Eliminar la cookie de sesión si existe

session_destroy();

header('Location: inicioSesion.html');
exit();

/* El exit es por si da error el header, interrumpe proceso*/

/* NUNCA poner el echo antes del header porque no se puede tener dos cabeceras, header cargare una nueva del html */


?>