<?php
    $conexion = mysqli_connect("localhost", "root", "", "bd_login_register");
    //control de conexion
    if ($conexion) {
        echo 'conexion exitosa felicidades';
    } else if ($conexion) {
        echo 'conexion NO establecida lamentablemente';
    }
?>