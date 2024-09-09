<?php

include("conexion.php");
if(isset($_POST['register']))
{
    //tabla empresa
    $nombre = $_POST['nombreEmpresa'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $password = $_POST['password'];
    $CUIT = $_POST['cuit'];
    $FechaCreacion = $_POST['FechaCreacion'];
    $consulta = "INSERT INTO usuario(id,email,pass,tipousuario)
            VALUES(null,'$email','$password',0)";
    $resultado = mysqli_query($enlace,$consulta);
    mysqli_close($enlace);

    include("conexion.php");
    $consulta = "INSERT INTO empresa(id,nombre,email,direccion,cuit)
            VALUES (null,'$nombre', '$email', '$direccion', '$CUIT')";
    $resultado = mysqli_query($enlace, $consulta);
    

    if(!$resultado) 
        header("location:../html/confirmacionE.php");
    
    else 
        header("location:../html/confirmacionE.php");
}
mysqli_close($enlace);
?>