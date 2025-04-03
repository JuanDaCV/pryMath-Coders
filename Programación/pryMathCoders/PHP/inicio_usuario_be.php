<?php
session_start();

include 'beConexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validarInicioSesion = mysqli_query($conexion, " SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena' ");

if (mysqli_num_rows($validarInicioSesion) > 0) {
    $_SESSION['usuario'] = $correo;
    header("location:../bienvenido.php");
    exit();
} else {
    echo '
    <script>
        alert("Los datos ingresados no existen o los ingresaste mal, verifique nuevamente");
        window.location="loginRegister.php";
    </script>
    ';
    exit();
}