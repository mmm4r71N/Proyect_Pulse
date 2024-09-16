<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos y Postulantes</title>
    <link rel="stylesheet" href="../css/diseñoProyectosE.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
                <img src="../img/LogoProyectPulse-01.png" alt="Logo">
        </div>
        <nav class="top-nav">
            <ul>
                <li><a href="paginaE.php">Inicio</a></li>
                <li><a href="login.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    
    <nav class="sidebar">
        <ul>
            <li><a href="paginaE.php">Inicio</a></li>
            <li><a href="perfilE.php">Perfil De Empresa</a></li>
            <li><a href="proyectosE.php">Proyectos</a></li>
            <li><a href="#">Mis Proyectos</a></li>
        </ul>
    </nav>
    
    <main class="content">
    <h2>Crear Proyecto</h2>
    <form  method="POST" class="profile-form">

        <label for="nombre">Nombre del Proyecto:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre de la Empresa" required>

        <label for="descripcion">Descripción del Proyecto:</label>
        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe tu empresa..."></textarea>

        <!-- Menú desplegable para Área Requerida -->
        <label class="dropdown-label" for="AreaRequerida">Área Requerida:
            <div class="dropdown-content">
                <a href="#">Tecnología</a>
                <a href="#">Finanzas</a>
                <a href="#">Marketing</a>
            </div>
        </label>

        <!-- Menú desplegable para Disponibilidad -->
        <label class="dropdown-label" for="Disponibilidad">Disponibilidad:
            <div class="dropdown-content">
                <a href="#">Tiempo completo</a>
                <a href="#">Medio tiempo</a>
                <a href="#">Freelance</a>
            </div>
        </label>

        <!-- Menú desplegable para Provincia -->
        <label class="dropdown-label" for="Provincia">Provincia:
            <div class="dropdown-content">
                <a href="#">CABA</a>
                <a href="#">Buenos Aires</a>
                <a href="#">Cordoba</a>
                <a href="#">Santa Fe</a>
                <a href="#">Mendoza</a>
                <a href="#">La Pampa</a>
                <a href="#">Neuquen</a>
                <a href="#">Rio Negro</a>
                <a href="#">Chubut</a>
                <a href="#">Santa Cruz</a>
                <a href="#">Tierra del Fuego</a>
                <a href="#">San Luis</a>
                <a href="#">Entre Rios</a>
                <a href="#">Corrientes</a>
                <a href="#">Misiones</a>
                <a href="#">Chaco</a>
                <a href="#">Formosa</a>
                <a href="#">Santiago del Estero</a>
                <a href="#">Buenos Aires</a>
                <a href="#">Córdoba</a>
                <a href="#">Santa Fe</a>
                <a href="#">Buenos Aires</a>
                <a href="#">Córdoba</a>
                <a href="#">Santa Fe</a>
            </div>
        </label>

        <label for="Localidad">Localidad</label>
        <input type="text" id="direccion" name="sitioweb" placeholder="Localidad" required>

        <label for="direccion">Dirección</label>
        <input type="text" id="direccion" name="sitioweb" placeholder="Dirección" required> 
        
        <!-- Botón de enviar -->
        <button type="submit" name="guardar">Guardar Cambios</button>

    </form>
</main>

    <script src="scripts/ScriptProyectosE.js"></script>
</body>
</html>
