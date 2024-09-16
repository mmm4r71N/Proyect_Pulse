<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MisProyectosE.css">
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
            <li><a href="#">Mis Proyectos</a></li>
        </ul>
    </nav>
<div class="main-content">
    <h1>Mis Proyectos</h1>
    <div class="card-container">
        <!-- Tarjeta 1 -->
        <div class="card">
            <img src="../img/proyecto1.jpg" alt="Proyecto 1">
            <div class="card-body">
                <h2>Nombre del Proyecto 1</h2>
                <p>Descripción breve del proyecto 1. Aquí puedes incluir detalles básicos sobre el proyecto.</p>
                <a href="#" class="toggle-info">Más información</a>
                <div class="card-extra-info">
                    <p><strong>Participantes:</strong> Juan Pérez, Ana Gómez</p>
                    <p><strong>Fecha de inicio:</strong> 01/01/2023</p>
                    <p><strong>Fecha de fin:</strong> 31/12/2023</p>
                </div>
            </div>
        </div>
        <!-- Tarjeta 2 -->
        <div class="card">
            <img src="../img/proyecto2.jpg" alt="Proyecto 2">
            <div class="card-body">
                <h2>Nombre del Proyecto 2</h2>
                <p>Descripción breve del proyecto 2. Aquí puedes incluir detalles básicos sobre el proyecto.</p>
                <a href="#" class="toggle-info">Más información</a>
                <div class="card-extra-info">
                    <p><strong>Participantes:</strong> Laura Fernández, Carlos Ruiz</p>
                    <p><strong>Fecha de inicio:</strong> 15/03/2023</p>
                    <p><strong>Fecha de fin:</strong> 15/09/2023</p>
                </div>
            </div>
        </div>
        <!-- Agrega más tarjetas según sea necesario -->
    </div>
</div>


</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleLinks = document.querySelectorAll('.toggle-info');

        toggleLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Evita que el enlace navegue
                const card = this.closest('.card');
                card.classList.toggle('show-extra'); // Muestra/oculta la información adicional
            });
        });
    });
</script>

