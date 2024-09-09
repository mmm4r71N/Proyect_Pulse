<?php

    include("conexion.php");
    session_start();

    if(isset($_POST['enviar']))
    {
     $email =$_SESSION['email'];
     $random = $_SESSION['random'];
     $codigo = $_POST["codigo"];
     $nuevo = $_POST["contra"];
     if($codigo == $random)
     {
         $sql = "SELECT * FROM usuario WHERE email = '$email'";

         $resultado = mysqli_query($enlace, $sql);
 
         //si no tirar error
         if(mysqli_num_rows($resultado)== 1)
         {
             if($codigo == $random)
             {
                 $consulta ="UPDATE usuario set pass = '$nuevo' where email = '$email'";
                 $resultado = mysqli_query($enlace, $consulta);
             }
         }
     }
     else 
         echo "no se pudo modificar";
    }
  
    mysqli_close($enlace);
 ?>