<?php
    include 'beConexion.php';

    $nombre_usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Verificar que no se repitan los correos
    $verificaCorreos = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    if (mysqli_num_rows($verificaCorreos) > 0) {
        echo '
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    title: "Ese correo ya Existe 😖😢!",
                    text: "Ingresa otro diferente",
                    imageUrl: "https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExeWw1N2dyczNocG8zZzQ1ZGZjdzJleTY0dGdsMGp1aXc1eTZycDFreSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/DXFzuOpPXvUiI/giphy.gif",
                    imageWidth: 300,
                    imageHeight: 200,
                    confirmButtonText: "Reintentar!",
                }).then(() => {
                    window.location = "loginRegister.php";
                });
            </script>
        ';
        exit();
    }

    // Verificar que no se repitan los usuarios
    $verificaUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario'");
    if (mysqli_num_rows($verificaUsuario) > 0) {
        echo '
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    title: "Ese Usuario ya Existe 😭😭!",
                    text: "Ingresa otro diferente",
                    imageUrl: "https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExYmZuMDV3amNqeDFsc3Z2cG5yc28zdHlic3diYTZrZzd3enBsOWN0ayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/TW8Ma1a8ZsZ8I/giphy.gif",
                    imageWidth: 300,
                    imageHeight: 200,
                    confirmButtonText: "Reintentar!",
                }).then(() => {
                    window.location = "loginRegister.php";
                });
            </script>
        ';
        exit();
    }

    // Si todo está bien, insertar el usuario
    $laQueInserta = "INSERT INTO usuarios(nombre_usuario, correo, contrasena) 
                    VALUES('$nombre_usuario', '$correo', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $laQueInserta) or die("Error en la consulta: " . mysqli_error($conexion));


    if ($ejecutar) {
        echo '
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    title: "Registro exitoso!",
                    text: "Te registraste bien! 😎🔥",
                    imageUrl: "https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExdHpmdHRvb2ozYWR4YzgxN3Y1bG5kMW14czB1cHd1eGFkNWl2bTUwcCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/11YMhfLfGoq5Gg/giphy.gif",
                    imageWidth: 400,
                    imageHeight: 300,
                    confirmButtonText: "Continuar!",
                    icon: "success"
                }).then(() => {
                    window.location = "loginRegister.php";
                });
            </script> 
        ';
    } else {
        echo '
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    title: "Error en el registro!",
                    text: "Hubo un problema, intenta de nuevo.",
                    imageUrl: "https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExOXFwZW4ycGNvcHlmZjN2cGtsMzV0bXlqd214dHBnM2QxbzRzdmp3NSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/iJJ6E58EttmFqgLo96/giphy.gif",
                    imageWidth: 300,
                    imageHeight: 300,
                    confirmButtonText: "Intentar de nuevo",
                    icon: "error"
                }).then(() => {
                    window.location = "loginRegister.php";
                });
            </script> 
        ';
    }

    mysqli_close($conexion);
?>