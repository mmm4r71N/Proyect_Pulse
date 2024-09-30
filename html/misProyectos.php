<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MisProyectosE.css">
</head>
<?php
include("..\database\conexion.php");

session_start();
if (isset($_SESSION['email'])) {
    $usuario = $_SESSION['email'];
    
    // Obtener el usuario
    $sql = "SELECT * FROM empresa WHERE email = '$usuario'";
    $consulta = mysqli_query($enlace, $sql);
    
    if (mysqli_num_rows($consulta) > 0) {
        $fila = mysqli_fetch_assoc($consulta);
        $nombre = $fila["email"];
        
        // Obtener los proyectos del usuario
        $sqlProyectos = "SELECT * FROM proyectos WHERE email = '$usuario'";
        $consultaProyectos = mysqli_query($enlace, $sqlProyectos);
    }
}
?>
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
        <?php
        // Verifica si hay proyectos
        if (mysqli_num_rows($consultaProyectos) > 0) {
            while ($proyecto = mysqli_fetch_assoc($consultaProyectos)) {
                echo '<div class="card">';
                echo '<img src="../img/proyecto_placeholder.jpg" alt="Proyecto ' . htmlspecialchars($proyecto['nombre']) . '">'; // Usa una imagen de placeholder
                echo '<div class="card-body">';
                echo '<h2>' . htmlspecialchars($proyecto['nombre']) . '</h2>';
                echo '<p>' . htmlspecialchars($proyecto['descripcion']) . '</p>';
                echo '<a href="#" class="toggle-info">Más información</a>';
                echo '<div class="card-extra-info">';
                //echo '<p><strong>Participantes:</strong> ' . htmlspecialchars($proyecto['participantes']) . '</p>'; // Asegúrate de tener esta columna en la tabla
                echo '<p><strong>Fecha de inicio:</strong> ' . htmlspecialchars($proyecto['fechainicio']) . '</p>';
                echo '<p><strong>Fecha de fin:</strong> ' . htmlspecialchars($proyecto['fechafin']) . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No tienes proyectos creados aún.</p>';
        }
        ?>
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
