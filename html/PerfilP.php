<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Perfil de Empresa</title>
    <link rel="stylesheet" href="../css/diseñoPerfilP.css">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <a href="PaginaP.php"> <img src="../img/LogoProyectPulse-01.png" alt="Logo"> </a>
        </div>
        <nav class="top-nav">
            <ul>
                <li><a href="paginaP.php">Inicio</a></li>
                <li><a href="login.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <nav class="sidebar">
        <ul>
            <li><a href="paginaP.php">Inicio</a></li>
            <li><a href="perfilP.php">Perfil</a></li>
            <li><a href="ExperienciaP.php">Mi Experiencia</a></li>
            <li><a href="Busqueda.php">Busqueda</a></li>
        </ul>
    </nav>
    <main class="content">
    <h2>Modificar Perfil</h2>
    <form  method="POST" class="profile-form">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre Completo" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>

        <label for="edad">Fecha de Nacimiento:</label>
        <input type="date" id="FechaNacimiento" name="FechaNacimiento" placeholder="Fecha de Nacimiento" required>

        <label for="descripcion">Descripción Personal:</label>
        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describite..."></textarea>
    
        <!-- Botón de enviar -->
        <button type="submit" name="guardar">Guardar Cambios</button>

    </form>

</main>

</body>

