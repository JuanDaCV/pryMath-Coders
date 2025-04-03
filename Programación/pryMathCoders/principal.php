<?php
session_start();
if (isset($_SESSION['uuario'])) {
    header("location: bienvenida.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/stylePrincipal.css">
    <link rel="icon" type="image/png" href="Imagenes/Iconos/logo.png">
    <title>Math Coders | Precisión y eficiencia en tus cálculos</title>
</head>

<body>
    <div class="contenedor">

        <div class="encabezado">
            <div class="logo">
                <a href="https://www.youtube.com/watch?v=CIbL7ZDBf0U"><img src="/Imagenes/Iconos/logo.png" width="60px"
                        alt="MATH CODERS"></a>
                <P style="color: rgb(85, 21, 145);">MATH CODERS</P>
            </div>
            <div class="mensajePrincipal">
                <h4>las complicaciones no son parte de nuestra vida ¡Ven ingeniero, ha aprender!</h4>
                <div class="logoLogin">
                    <a href="PHP/loginRegister.php"><img src="Imagenes/Iconos/Login.png" width="30px" alt="Login"></a>
                </div>
                <a href="PHP/loginRegister.php">
                    <p style="color: rgb(240, 128, 0);">Iniciar Sección</p>
                </a>
            </div>
        </div>

        <div class="nav">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <ul class="menu" id="mainMenu">
                <li class="menu-item">
                    <a href="principal.php" class="menu-link">Inicio</a>
                </li>
                <li class="menu-item">
                    <a href="servicio.php" class="menu-link">Servicios</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">Cursos</a>
                </li>
                <li class="menu-item">
                    <a href="AcercaDe.php" class="menu-link">Acerca de</a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="#" class="submenu-link">Nuestra sede</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="submenu-link">Contacto</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="submenu-link">¿Quiénes somos?</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">Comunidad</a>
                </li>
            </ul>
        </div>

        <div class="rayita"></div>

        <div class="contenido">
            <!--La clase Fondo tiene una seccion de su estilo-->
            <div class="fondo">
                <br><br><br><br>
                <h1>Math Coders: </h1>
                <h1>Tú Compañero en Métodos Numéricos</h1><br>
                <h4>"Resuelve ejercicios, aprende paso a paso y discute con otros estudiantes. Todo en un solo lugar."
                </h4>
                <br>
                <div class="buttonPrincipal"><a href="">empecemos</a></div>
                <div class="caracteristicas">
                    <div><img src="Imagenes/Iconos/Lock.png" alt="velocidad"></div>
                    <div>
                        <p>Velocidad y<br>seguridad</p>
                    </div>
                    <div><img src="Imagenes/Iconos/expandir.png" alt="amplitud"></div>
                    <div>
                        <p>Flexibilidad y<br>amplitud</p>
                    </div>
                    <div><img src="Imagenes/Iconos/colaborar.png" alt="calaboracion"></div>
                    <div>
                        <p>Mejor<br>colaboración</p>
                    </div>
                </div>
            </div>

            <div class="conteImagenFondo">
            </div>
        </div>

        <div class="rayita"></div>

        <div class="contenido2">
            <div class="titulillo">Aprendizaje <span class="colorText">moderno en movimiento</span></div>

            <div class="textos">
                <p>
                    ¿Te gustaría aprender métodos numéricos de una forma más sencilla y práctica? ¿Buscas una
                    herramienta que te ayude a entender cada paso y mejorar tu rendimiento? Nuestra plataforma está
                    diseñada para hacer del aprendizaje una experiencia intuitiva y eficiente. Con explicaciones paso a
                    paso, foros para discutir problemas con otros estudiantes y un sistema de evaluación automática,
                    tendrás todo lo que necesitas para dominar los métodos numéricos sin complicaciones. ¡Aprender nunca
                    fue tan dinámico y accesible!
                </p>
                <p>
                    Nuestra plataforma está pensada para estudiantes, profesores y universidades que buscan una nueva
                    forma de aprender y enseñar métodos numéricos. Con una interfaz moderna, automatización inteligente
                    y herramientas interactivas, ofrecemos un espacio donde la teoría y la práctica se combinan
                    perfectamente. Desde evaluaciones automáticas hasta foros colaborativos, cada función ha sido
                    diseñada para hacer del aprendizaje un proceso más eficiente, motivador y adaptado a las necesidades
                    del mundo actual. ¡Descubre una nueva manera de aprender!
                </p>
            </div>

            <div class="boton2"><a href="">¿Porque no nos conoces?</a></div>

        </div>

        <div class="rayita"></div>

        <div class="footer">
            <div class="logoLetra"><img src="Imagenes/logoLetras.png" alt=""></div>
            <div class="info">
                <div class="redesSociales">
                    Nuestras Redes: <br><br>
                    <a href="https://www.facebook.com/"><img src="Imagenes/Iconos/00-facebook.png" alt="Facebook"
                            width="50px"></a>
                    <a href="https://web.whatsapp.com/"><img src="Imagenes/Iconos/00-Whatsapp.png" alt="Whasapp"
                            width="50px"></a>
                    <a href="https://www.instagram.com/"><img src="Imagenes/Iconos/00-instagram.png" alt="Instagaram"
                            width="50px"></a>
                    <a href="https://x.com/twitter"><img src="Imagenes/Iconos/00-twitter.png" alt="X" width="50px"></a>
                </div><br>
                <div class="ubicacion">
                    Encuentranos en:
                    <br>Cra 7 # 15-28 Libertadores
                    <br><br>Hora de atencion: <br>
                    <br>Lunes a Viernes de 6:00 AM - 5:00 PM
                    <br>Sabados y Domingos: de 8:00 AM a 2:00 PM
                </div>
            </div>
            <div class="miembros">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.507676068992!2d-76.53491542515541!3d3.393617551319818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a71be67cb0ad%3A0x26973a82803f6954!2sInstituci%C3%B3n%20Universitaria%20Antonio%20Jos%C3%A9%20Camacho!5e0!3m2!1ses-419!2sco!4v1710431234567"
                    width="100%" height="300" style="border-radius: 60px;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>

        <div style="margin-top: 25px;">
            <center> Copyright © 2025 MATH CODERS Learning, Inc. Todos los derechos reservados. </center>
        </div>

        <div class="rayita"></div>
</body>

<script src="js/navPrincipal.js"></script>

</html>