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
        <form action="../database/recuperar.php" method="post">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Enviar" name="recuperar">
        </form>
    </div>
</body>
</html>

