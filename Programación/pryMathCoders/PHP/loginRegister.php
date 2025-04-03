<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: ../bienvenido.php");
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styleLoginRegister.css">
    <link rel="icon" type="image/png" href="../Imagenes/Iconos/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Math Coders | Crea o Inicia tu cuenta</title>
</head>

<body>

    <div class="container">

        <div class="contenedor--form">

            <form action="inicio_usuario_be.php" method="POST" class="sign-in">
                <div class="volver"><a href="../principal.php"><ion-icon size="small" src="../Imagenes/Iconos/arrow-back-outline.svg"></ion-icon></a></div>

                <h2>Iniciar Sesión</h2>

                <div class="social--icons">
                    <ion-icon src="../Imagenes/Iconos/logo-google.svg"></ion-icon>
                    <ion-icon src="../Imagenes/Iconos/logo-facebook.svg"></ion-icon>
                    <ion-icon src="../Imagenes/Iconos/logo-github.svg"></ion-icon>
                </div>

                <span>Use su correo y su contraseña</span>

                <div class="contenedor--entrada">
                    <ion-icon src="../Imagenes/Iconos/mail-outline.svg"></ion-icon>
                    <input type="text" placeholder="Ingresa tu correo" name="correo">
                </div>

                <div class="contenedor--entrada">
                    <ion-icon src="../Imagenes/Iconos/lock-closed-outline.svg"></ion-icon>
                    <input type="password" placeholder="Ingresa tu contraseña" name="contrasena">
                </div>

                <a href="">¿Olvidaste tu contraseña?</a>

                <button class="button">iniciar sesion</button>
            </form>
        </div>

        <!--SEPARACIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN-->

        <div class="contenedor--form">
            <form action="registro_usuario_be.php" method="POST" class="sign-up">

                <div class="volver"><a href="../principal.php"><ion-icon size="small" src="../Imagenes/Iconos/arrow-back-outline.svg"></ion-icon></a></div>
                <h2>Registrarse</h2>

                <div class="social--icons">
                    <ion-icon src="../Imagenes/Iconos/logo-google.svg"></ion-icon>
                    <ion-icon src="../Imagenes/Iconos/logo-facebook.svg"></ion-icon>
                    <ion-icon src="../Imagenes/Iconos/logo-github.svg"></ion-icon>
                </div>

                <span>Use su correo para registrarse</span>

                <div class="contenedor--entrada">
                    <ion-icon src="../Imagenes/Iconos/person-add-outline.svg"></ion-icon>
                    <input type="text" placeholder="Ingresa tu usuario" name="nombre_usuario">
                </div>

                <div class="contenedor--entrada">
                    <ion-icon src="../Imagenes/Iconos/mail-outline.svg"></ion-icon>
                    <input type="text" placeholder="Ingresa tu correo" name="correo">
                </div>

                <div class="contenedor--entrada">
                    <ion-icon src="../Imagenes/Iconos/lock-open-outline.svg"></ion-icon>
                    <input type="password" placeholder="Ingresa tu contraseña" name="contrasena">
                </div>

                <button class="button">registrarse</button>
            </form>
        </div>

        <div class="container-welcome">

            <div class="welcome-sign-up welcome">
                <h3>¡Bienvenidos!</h3>
                <p>Ingresa tus datos personales para usar todas las funciones del sitio</p>
                <button class="button" id="btn-sign-up">Registrarse</button>
            </div>

            <div class="welcome-sign-in welcome">
                <h3>¡Hola!</h3>
                <p>Registrece con sus datos personales para usar todas las funciones del sitio</p>
                <button class="button" id="btn-sign-in">iniciar Sesion</button>
            </div>

        </div>

    </div>

    <script src="../JS/loginRegister.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>