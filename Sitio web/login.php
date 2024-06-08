<?php
    session_start();
    
    
    include 'conexion.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM cliente WHERE CORREO='$email' and CONTRA='$password' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: bienvenida.php");
        exit;
    }else{
            echo '
               <script>
                    alert("Usuario inexistente, favor verificar sus datos correctamente");
                    window.location = "../index.html";
                </script>
            ';
            exit;
    }
?>