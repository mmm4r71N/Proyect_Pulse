<?php
    include("conexion.php");
    session_start();
    if(isset($_POST['submit']))
        {
       if(!empty($_POST['email']) and !empty($_POST['password']))
            {
            
            $usuario = $_POST["email"];
            $clave = $_POST["password"];
            $_SESSION['email']= $usuario;
            $consulta = "SELECT * from usuario WHERE email='$usuario' AND pass = '$clave'";
            $resultado = mysqli_query($enlace,$consulta);
            if($resultado)
                {
                $filas = mysqli_num_rows($resultado);
                if($filas>0)
                    {
                    $row = mysqli_fetch_assoc($resultado);
                    if($row['tipousuario']==0)
                        header("location:../html/paginaE.php");
                    else 
                        header("location:../html/paginaP.php");
                    }
                }
            else
                echo "El email o la contraseña no son correctos";
            }
        }
        mysqli_close($enlace);
?>