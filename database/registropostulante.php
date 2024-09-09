<?php
require("conexion.php");
if(isset($_POST['register']))   
    {
    //tabla empresa
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $password = $_POST['password'];
    $DNI = $_POST['cuit'];
    $Nacimiento = $_POST['fechaNacimiento'];
    $consulta = "INSERT INTO usuario(id,email,pass,tipousuario)
        VALUES(null,'$email','$password',1)";
    $resultado = mysqli_query($enlace,$consulta);
    $consulta = "INSERT INTO postulante(id,nombre, email, direccion, cuit, fechanacimiento)
        VALUES (null,'$nombre', '$email', '$direccion', '$DNI','$Nacimiento')";
    $resultado = mysqli_query($enlace, $consulta);
    
    if(!$resultado) 
        header("location:../html/confirmacionP.php");
    else 
        header("location:../html/confirmacionP.php");
    
    }
    
    mysqli_close($enlace);
?>