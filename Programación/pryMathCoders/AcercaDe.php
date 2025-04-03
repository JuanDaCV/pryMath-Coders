<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Imagenes/Iconos/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styleAcercaDe.css">
    <title>Cónocenos | ¡Equipo de desarrollo!</title>
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
                <h4>El conocimiento no espera, ¡ven ingeniero, a conquistar el futuro!</h4>
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

        <div class="cuerpo-II">
            <div class="text">
                <h2>¿Quiénes somos?</h2>
                <p>
                    Somos un equipo apasionado por la tecnología y el desarrollo de software. Nuestra misión es crear soluciones innovadoras que faciliten el aprendizaje y la educación digital. 🚀 Creemos en el poder del conocimiento accesible para todos. Por eso, diseñamos esta plataforma con el objetivo de ofrecer contenido claro y explicaciones detalladas que ayuden a estudiantes de manera efectiva.
                </p>
            </div>

            <!-- PRIMER INTEGRANTE -->
            <div class="presentacion">
                <div class="contenedor-foto">
                    <div class="foton"></div>
                </div>
                <div class="contenedor-descripcion">
                    <h4>Conóceme !!</h4>
                    <p><strong>NOMBRE:</strong> Juan David Carabali Velasco</p>
                    <p><strong>ROL:</strong> Full-Stack Developer | Scrum Master</p>
                    <p><strong>CONOZCO DE:</strong> <span style="color:goldenrod;">JavaScript</span> | <span style="color:blue;">PHP</span> | <span style="color:red;">HTML</span> | <span style="color:darkblue;">CSS</span> | <span style="color:green;">SQL</span></p>
                    <p class="moraleja">"El código perfecto no existe, pero podemos acercarnos bastante."</p>
                </div>
            </div>

            <!-- SEGUNDO INTEGRANTE -->
            <div class="presentacion sisas">
                <div class="contenedor-foto">
                    <div class="foton"></div>
                </div>
                <div class="contenedor-descripcion">
                    <h4>Conóceme !!</h4>
                    <p><strong>NOMBRE:</strong> María Camila Romero</p>
                    <p><strong>ROL:</strong> Frontend Developer | UI/UX Designer</p>
                    <p><strong>CONOZCO DE:</strong> <span style="color:purple;">React</span> | <span style="color:blue;">Figma</span> | <span style="color:red;">HTML</span> | <span style="color:darkblue;">CSS</span> | <span style="color:orange;">JavaScript</span></p>
                    <p class="moraleja">"El diseño es el alma de toda creación digital."</p>
                </div>
            </div>

            <!-- TERCER INTEGRANTE -->
            <div class="presentacion">
                <div class="contenedor-foto">
                    <div class="foton"></div>
                </div>
                <div class="contenedor-descripcion">
                    <h4>Conóceme !!</h4>
                    <p><strong>NOMBRE:</strong> Sebastián Guerrero Mosquera</p>
                    <p><strong>ROL:</strong> Backend Developer | Database Administrator</p>
                    <p><strong>CONOZCO DE:</strong> <span style="color:green;">Python</span> | <span style="color:blue;">PostgreSQL</span> | <span style="color:darkred;">MongoDB</span> | <span style="color:orange;">Node.js</span> | <span style="color:darkblue;">Django</span></p>
                    <p class="moraleja">"Los datos son el corazón de cualquier aplicación."</p>
                </div>
            </div>

            <!-- CUARTO INTEGRANTE -->
            <div class="presentacion sisas">
                <div class="contenedor-foto">
                    <div class="foton"></div>
                </div>
                <div class="contenedor-descripcion">
                    <h4>Conóceme !!</h4>
                    <p><strong>NOMBRE:</strong> Fraizon Javier Zúñiga</p>
                    <p><strong>ROL:</strong> DevOps Engineer | Cybersecurity Analyst</p>
                    <p><strong>CONOZCO DE:</strong> <span style="color:darkgreen;">Linux</span> | <span style="color:blue;">Docker</span> | <span style="color:gray;">Kubernetes</span> | <span style="color:red;">Pentesting</span> | <span style="color:goldenrod;">AWS</span></p>
                    <p class="moraleja">"La seguridad no es un producto, es un proceso."</p>
                </div>
            </div>

            <!-- QUINTO INTEGRANTE -->
            <div class="presentacion">
                <div class="contenedor-foto">
                    <div class="foton"></div>
                </div>
                <div class="contenedor-descripcion">
                    <h4>Conóceme !!</h4>
                    <p><strong>NOMBRE:</strong> Daniel Grijalba León</p>
                    <p><strong>ROL:</strong> QA Engineer | Software Tester</p>
                    <p><strong>CONOZCO DE:</strong> <span style="color:purple;">Selenium</span> | <span style="color:darkblue;">JUnit</span> | <span style="color:darkred;">Cypress</span> | <span style="color:blue;">TestRail</span> | <span style="color:green;">Python</span></p>
                    <p class="moraleja">"Un software sin pruebas es solo una hipótesis."</p>
                </div>
            </div>
        </div>


    </div>

</body>
<script src="js/navPrincipal.js"></script>

</html>