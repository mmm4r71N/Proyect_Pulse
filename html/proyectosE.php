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
        <h1>Proyectos y Postulantes</h1>
        
        <!-- Formulario de Mi Empresa -->
        <div class="form-container">
            <form class="empresa-form">
                <fieldset>
                    <legend>Mi empresa</legend>
                    
                    <label for="nombre">Nombre*</label>
                    <input type="text" id="nombre" name="nombre" required>
                    
                    <label for="descripcion">Descripción*</label>
                    <textarea id="descripcion" name="descripcion" required></textarea>
                    
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono">
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                    
                    <label for="pais">País*</label>
                    <select id="pais" name="pais" required>
                        <option value="argentina">Argentina</option>
                        <!-- Otras opciones -->
                    </select>
                    
                    <label for="provincia">Provincia*</label>
                    <input type="text" id="provincia" name="provincia" required>
                    
                    <label for="ciudad">Ciudad*</label>
                    <input type="text" id="ciudad" name="ciudad" required>
                    
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion">
                </fieldset>
            </form>
        </div>
    </main>

    <script src="scripts/ScriptProyectosE.js"></script>
</body>
</html>
