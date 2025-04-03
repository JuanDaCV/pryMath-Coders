<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        echo '
        <script>
            alert("Mamaguevo, debes iniciar sesión");
            window.location = "PHP/loginRegister.php";
        </script>';
        //header("location: PHP/loginRegister.php");
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Usuario</title>
</head>

<body>
    <h1 style="font-size: 100px; margin-left: 50px; color: red;">Metete ele dedo en el culo</h1>
    <a href="PHP/cerrar_sesion.php">Cerrar Sesion</a>
</body>

</html>