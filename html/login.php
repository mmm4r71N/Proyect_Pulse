
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../css/stylesForm.css"> <!-- Usa el mismo CSS que el de registro -->
</head>
<body>
    <nav class="navbar">
        <a href="index.php">
            <img src="../img/LogoProyectPulse-01.png" alt="Inicio" class="nav-logo">
        </a>
        <ul class="nav-links">
            <li><a href="seleccionregistro.php">Crea Tu Cuenta</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
        </ul>  
    </nav>

    <div class="registro-formulario">
        <h1>Inicio de Sesión</h1>
        <form action="../database/login.php" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" autocomplete="off" required>

            <input type="submit" value="Continuar" class="radio-buttons" name="submit">

            <p>No estás registrado? <a href="seleccionregisto.php">Crear cuenta</a></p>
            <p>Perdiste la contraseña? <a href="recuperarcontra.php">Recuperar contraseña</a></p>
        </form>
    </div>
</body>
