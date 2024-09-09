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
        <a href="inicio.php">
            <img src="../img/LogoProyectPulse-01.png" alt="Logo">
        </a>
        </div>
        <nav class="top-nav">
            <ul>
                <li><a href="paginaE.php">Inicio</a></li>
                <li><a href="#">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main class="content">
        <h1>Proyectos y Postulantes</h1>
        <div class="projects-container">
            <!-- Tarjeta de Proyecto 1 -->
            <div class="project-card">
                <div class="card-header">
                    <img src="../img/project-logo-a.png" alt="Logo del Proyecto A" class="project-logo">
                    <div>
                        <h2>Proyecto A</h2>
                        <span class="status open">Abierto</span>
                    </div>
                </div>
                <p class="project-summary">Resumen del proyecto A: Este proyecto busca desarrollar una nueva aplicación móvil para mejorar la comunicación entre equipos...</p>
                <a href="#" class="view-details" data-project="1">Ver Detalles</a>
                <div class="applicants-info">
                    <h3>Postulantes</h3>
                    <ul>
                        <li>Juan Pérez - Desarrollador</li>
                        <li>María López - Diseñadora</li>
                    </ul>
                </div>
            </div>
            <!-- Tarjeta de Proyecto 2 -->
            <div class="project-card">
                <div class="card-header">
                    <img src="../img/project-logo-b.png" alt="Logo del Proyecto B" class="project-logo">
                    <div>
                        <h2>Proyecto B</h2>
                        <span class="status closed">Cerrado</span>
                    </div>
                </div>
                <p class="project-summary">Resumen del proyecto B: Este proyecto se centra en la creación de una plataforma de e-learning para educación en línea...</p>
                <a href="#" class="view-details" data-project="2">Ver Detalles</a>
                <div class="applicants-info">
                    <h3>Postulantes</h3>
                    <ul>
                        <li>Ana Gómez - Desarrolladora Frontend</li>
                        <li>Pedro Martínez - Backend Developer</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Ventana Modal para Detalles del Proyecto -->
    <div id="project-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-header">
                <img id="modal-logo" src="" alt="Logo del Proyecto" class="modal-logo">
                <div>
                    <h2 id="modal-title">Título del Proyecto</h2>
                    <span id="modal-status" class="status"></span>
                </div>
            </div>
            <p id="modal-description">Descripción extensa del proyecto...</p>
            <p><strong>Fecha de Creación:</strong> <span id="modal-start-date"></span></p>
            <p><strong>Fecha de Finalización:</strong> <span id="modal-end-date"></span></p>
        </div>
    </div>

    <script src="scripts/ScriptProyectosE.js"></script>
</body>
</html>
