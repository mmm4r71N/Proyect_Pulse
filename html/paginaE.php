<!DOCTYPE html>
<html lang="es">
    <?php
    include("..\database\conexion.php");
    
    session_start();
    if(isset($_SESSION['email']))
        {
        $usuario =$_SESSION['email'];
        $sql = "SELECT * FROM empresa WHERE email = '$usuario'";
        $consulta =mysqli_query($enlace, $sql);
        if (mysqli_num_rows($consulta) > 0) {
            $fila = mysqli_fetch_assoc($consulta);
            $nombre = $fila["nombre"];
            }
         }   
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Empresa - Postulantes</title>
    <link rel="stylesheet" href="../css/menu.css">
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
                
                <li><a href="#">Bienvenido, <?php echo $nombre ?></a></li>
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
        <h1>Postulantes</h1>
    
        <section class="applicants-list">
            <article class="applicant-card">
                <div class="card-header">
                    <div class="avatar">
                        <img src="https://via.placeholder.com/60" alt="Avatar de Juan Pérez">
                    </div>
                    <div class="card-info">
                        <h2>Juan Pérez</h2>
                        <p><strong>Posición:</strong> Desarrollador Web</p>
                        <p><strong>Proyecto:</strong> Desarrollo de Aplicación Móvil</p>
                        <p><strong>Ubicación:</strong> Ciudad XYZ</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="view-profile-button">Ver Perfil</a>
                </div>
            </article>
            <article class="applicant-card">
                <div class="card-header">
                    <div class="avatar">
                        <img src="https://via.placeholder.com/60" alt="Avatar de María López">
                    </div>
                    <div class="card-info">
                        <h2>María López</h2>
                        <p><strong>Posición:</strong> Diseñadora Gráfica</p>
                        <p><strong>Proyecto:</strong> Rediseño de Marca</p>
                        <p><strong>Ubicación:</strong> Ciudad ABC</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="view-profile-button">Ver Perfil</a>
                </div>
            </article>
            <!-- Agregar más tarjetas de postulantes aquí -->
        </section>
    </main>
</body>
</html>

<!--?php
    include("..\database\conexion.php");
    
    session_start();
    $usuario =$_SESSION['email'];
    $sql = "SELECT * FROM empresa WHERE email = '$usuario'";
    $consulta =mysqli_query($enlace, $sql);
    if (mysqli_num_rows($consulta) > 0) {
        $fila = mysqli_fetch_assoc($sql);
        $nombre = $fila["nombre"];
    }

?>
