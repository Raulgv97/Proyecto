<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
            alert("Debes de Iniciar Sesion");
            window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="header">
            <header>
                <nav>
                  <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="producto.html">Productos</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="login.html">Log in</a></li>
                    <li><a href="nosotros.html">Sobre Nosotros</a></li>
                  </ul>
                </nav>
            </header>
            <a href="index.html"><img class="centro" src="imagenes/Logo3.png" width="800" height="300"/></a>
        </div> 
    <h1>Bienvenido a Zneakers</h1>
    <a href=" cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>