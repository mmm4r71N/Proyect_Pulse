<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos y Postulantes</title>
    <link rel="stylesheet" href="../css/diseñoProyectosE.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <a href="PaginaE.php"> <img src="../img/LogoProyectPulse-01.png" alt="Logo"></a>
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
            <li><a href="misProyectos.php">Mis Proyectos</a></li>
        </ul>
    </nav>
    
    <main class="content">
        <h2>Crear Proyecto</h2>
        <form method="POST" class="profile-form">

            <label for="nombre">Nombre del Proyecto:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del Proyecto" required>

            <label for="descripcion">Descripción del Proyecto:</label>
            <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe tu Proyecto..."></textarea>

            <!-- Menú desplegable para Área Requerida -->
            <label class="dropdown-label" for="AreaRequerida">
                <span>Area Requerida:</span>
                <div class="dropdown-content">
                    <a href="#" data-value="Tecnologia">Tecnología</a>
                    <a href="#" data-value="Finanzas">Finanzas</a>
                    <a href="#" data-value="Marketing">Marketing</a>
                </div>
            </label>

            <!-- Menú desplegable para Disponibilidad -->
            <label class="dropdown-label" for="Disponibilidad">
                <span>Disponibilidad:</span>
                <div class="dropdown-content">
                    <a href="#" data-value="FullTime">FullTime</a>
                    <a href="#" data-value="PartTime">Part Time</a>
                    <a href="#" data-value="Ambas">Ambas</a>
                </div>
            </label>

            <!-- Menú desplegable para Provincia -->
            <label class="dropdown-label" for="Provincia">
                <span>Provincia:</span>
                <div class="dropdown-content">
                    <a href="#" data-value="CABA">CABA</a>
                    <a href="#" data-value="Buenos Aires">Buenos Aires</a>
                    <a href="#" data-value="Cordoba">Cordoba</a>
                    <a href="#" data-value="Santa Fe">Santa Fe</a>
                    <a href="#" data-value="Mendoza">Mendoza</a>
                    <a href="#" data-value="La Pampa">La Pampa</a>
                    <a href="#" data-value="Neuquen">Neuquen</a>
                    <a href="#" data-value="Rio Negro">Rio Negro</a>
                    <a href="#" data-value="Chubut">Chubut</a>
                    <a href="#" data-value="Santa Cruz">Santa Cruz</a>
                    <a href="#" data-value="Tierra del Fuego">Tierra del Fuego</a>
                    <a href="#" data-value="San Luis">San Luis</a>
                    <a href="#" data-value="Entre Rios">Entre Rios</a>
                    <a href="#" data-value="Corrientes">Corrientes</a>
                    <a href="#" data-value="Misiones">Misiones</a>
                    <a href="#" data-value="Chaco">Chaco</a>
                    <a href="#" data-value="Formosa">Formosa</a>
                    <a href="#" data-value="Santiago del Estero">Santiago del Estero</a>
                    <a href="#" data-value="La Rioja">La Rioja</a>
                    <a href="#" data-value="Salta">Salta</a>
                    <a href="#" data-value="Jujuy">Jujuy</a>
                    <a href="#" data-value="Catamarca">Catamarca</a>
                    <a href="#" data-value="San Juan">San Juan</a>
                    <a href="#" data-value="Tucuman">Tucuman</a>
                </div>
            </label>

            <label for="Localidad">Localidad:</label>
            <input type="text" id="localidad" name="localidad" placeholder="Localidad" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
            
            <!-- Campos de fecha de inicio y finalización -->
            <label for="fechaInicio">Fecha de Inicio:</label>
            <input type="date" id="fechaInicio" name="fechaInicio" required>

            <label for="fechaFin">Fecha de Finalización:</label>
            <input type="date" id="fechaFin" name="fechaFin" required>
            
            <!-- Botón de enviar -->
            <button type="submit" name="guardar">Guardar Cambios</button>

        </form>
    </main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los dropdown-label
    const dropdownLabels = document.querySelectorAll('.dropdown-label');

    // Añadir event listener a cada uno para el click
    dropdownLabels.forEach(label => {
        label.addEventListener('click', function(event) {
            // Alternar la clase active para desplegar o esconder el menú
            this.classList.toggle('active');
            event.stopPropagation(); // Evita que el clic en el dropdown cierre el menú
        });
    });

    // Manejar la selección de una opción en el menú desplegable
    document.querySelectorAll('.dropdown-content a').forEach(option => {
        option.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir el comportamiento por defecto del enlace
            const dropdownLabel = this.closest('.dropdown-label'); // Obtener el dropdown-label asociado
            dropdownLabel.querySelector('span').textContent = this.textContent; // Actualizar el texto del label
            // Cerrar el menú
            dropdownLabels.forEach(label => {
                label.classList.remove('active');
            });
        });
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener('click', function(event) {
        dropdownLabels.forEach(label => {
            if (!label.contains(event.target)) {
                label.classList.remove('active');
            }
        });
    });
});

</script>
</body>

