<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: formulario.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register Encanto Araucano</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="../Imágenes/logo.png" alt="logo">
        </div>
        <nav>
            <ul>
                <li><a href="../Html/Encanto Araucano.html">Home</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="contacto.php">Contactanos </a></li>
            </ul>
        </nav>
        <div class="box">
            <input type="text" placeholder="Search...">
            <a href="#">
                <i class="fas fa-search"></i>
            </a>
            <img src="https://cdn-icons-png.flaticon.com/512/25/25313.png" alt="lupa">
       </div>    
    </header>   
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para dejar una reseña</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="inicio_sesion_BE.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo Electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Entrar</button>
                </form>
                <form action="registro_BE.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../Scripts/form.js"></script>
</body>
</html>