<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/recuperarcontra.css">
    <title>Recuperar Contraseña</title>

</head>
<body>
<nav class="navbar">
        <a href="inicio.php">
            <img src="../img/LogoProyectPulse-01.png" alt="Inicio" class="nav-logo">
        </a>
        <ul class="nav-links">
            <li><a href="login.php">Login</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
        </ul>  
    </nav>
    <div class="container">
        <div class="header"></div>
        <h2>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Recuperar Contraseña</h2>
        <p><span class="bold">¿Tienes problemas para entrar?</span><br>Introduce tu correo electrónico y te enviaremos un correo electrónico para restablecer tu contraseña.</p>
        <form action="" method="post">
            <label for="codgio">Ingrese el codigo de recuperacion:</label>
            <input type="codigo" id="codigo" name="codigo" required>
            <label for ="contr">Ingrese la nueva contraseña</label>
            <input type="contra" id="contra" name="contra" required>
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </div>
</body>
</html>
<?php
include("..\database\conexion.php");
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
        //$consulta = "UPDATE usuarios set pass = $nuevo where email = $email";
        $resultado = mysqli_query($enlace, $sql);
        //update y mensaje de confirmacion

        //si no tirar error
        if(mysqli_num_rows($resultado)== 1)
        {
            if($codigo == $random)
            {
                $consulta ="UPDATE usuario set pass = '$nuevo' where email = '$email'";
                $resultado = mysqli_query($enlace, $consulta);
                echo $codigo;
                echo $nuevo;
            }
        }
    }
    else 
        echo "no se pudo modificar";
   }
 
   mysqli_close($enlace);
?>