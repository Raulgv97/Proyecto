<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];


$query = "INSERT INTO cliente(DNI, NOMBRE, APELLIDO, CORREO, CONTRA, DIRECCION)
        VALUES('$dni','$nombre', '$apellido', '$email', '$password', '$direccion')";

//Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM cliente WHERE CORREO ='$email' ");

if(mysqli_num_rows($verificar_correo) > 0 ){
    echo '
    <script>
        alert("Este correo ya esta registrado, intenta con otro...");
        window.location = "../index.html";
    </script>    
    ';
    exit();
}

//Verificar que el usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM cliente WHERE DNI ='$dni' ");

if(mysqli_num_rows($verificar_usuario) > 0 ){
    echo '
    <script>
        alert("Este usuario ya esta registrado, intenta con otro...");
        window.location = "../index.html";
    </script>    
    ';
    exit();
}    

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.html";
        </script>    
    ';
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../index.html";
        </script>    
    ';
}

mysqli_close($conexion);

?>