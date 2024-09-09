<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/diseñologin.css">
    <title>Inicio de Sesion</title>
</head>
<body>

<nav class="navbar">
        <a href="inicio.php">
            <img src="../img/LogoProyectPulse-01.png" alt="Inicio" class="nav-logo">
        </a>
        <ul class="nav-links">
            <li><a href="index.php">Crea Tu Cuenta</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
        </ul>  
    </nav>
      <div class="container">
        <div class="box form-box">
            <header>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inicio de Sesion</header>
            <form action="../database/login.php" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Continuar" required>
                </div>
                <div class="links">
                    No estas registrado? <a href="index.php">Crear cuenta </a>
                </div>
                
                <div class="links">
                    Perdiste la contraseña? <a href="recuperarcontra.php">Recuperar contraseña </a>
                </div>
            </form>
        </div>
      </div>
      <div class="image-section">
            <img src="../img/IMAGEN_LOGIN.jpg" alt="Descripción de la foto">
        </div>
</body>
</html>