<!DOCTYPE html>
<html lang="es">
<?php
    include("..\database\conexion.php");

    session_start();
    if (isset($_SESSION['email'])) {
        $usuario = $_SESSION['email'];
        $sql = "SELECT * FROM empresa WHERE email = '$usuario'";
        $consulta = mysqli_query($enlace, $sql);
        if (mysqli_num_rows($consulta) > 0) {
            $fila = mysqli_fetch_assoc($consulta);
            $nombre = $fila["nombre"];
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Perfil de Empresa</title>
    <link rel="stylesheet" href="../css/diseñoPerfilE.css">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <img src="../img/LogoProyectPulse-01.png" alt="Logo">
        </div>
        <nav class="top-nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <nav class="sidebar">
        <ul>
            <li><a href="paginaE.php">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="proyectosE.php">Proyectos</a></li>
            <li><a href="#">Postulantes</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="#">Todas las herramientas</a></li>
        </ul>
    </nav>

    <main class="content">
        <h1>Modificar Perfil de Empresa</h1>
        <form class="profile-form" method="POST" enctype="multipart/form-data">
            <section class="section">
                <h2>Datos Generales</h2>
                <label for="companyName">Nombre de la Empresa:</label>
                <input type="text" id="companyName" name="companyName" placeholder="Nombre de la Empresa" required>

                <label for="companyDescription">Descripción:</label>
                <textarea id="companyDescription" name="companyDescription" rows="4" placeholder="Descripción de la Empresa" required></textarea>

                <label for="website">Sitio Web:</label>
                <input type="url" id="website" name="website" placeholder="https://www.ejemplo.com" required>
            </section>

            <section class="section">
                <h2>Contacto</h2>
                <label for="contactEmail">Email de Contacto:</label>
                <input type="email" id="contactEmail" name="contactEmail" placeholder="contacto@empresa.com" required>

                <label for="contactPhone">Teléfono:</label>
                <input type="tel" id="contactPhone" name="contactPhone" placeholder="123-456-7890" required>
            </section>

            <section class="section">
                <h2>Documentos Importantes</h2>
                <label for="logo">Logo de la Empresa:</label>
                <input type="file" id="logo" name="logo" accept="image/*">

                <label for="companyDocs">Documentos Adicionales:</label>
                <input type="file" id="companyDocs" name="companyDocs" accept=".pdf,.doc,.docx" multiple>
            </section>

            <button type="submit" class="submit-button" name="guardar">Guardar Cambios</button>
        </form>
    </main>
</body>

<?php 
if (isset($_POST['guardar'])) {
    // Datos de la empresa obtenidos del formulario
    $empresa = $_POST['companyName'];
    $descripcion = $_POST['companyDescription'];
    $sitio = $_POST['website'];
    $contacto = $_POST['contactEmail'];
    $telefono = $_POST['contactPhone'];

    // Verificar si ya existe el email en la tabla
    $consulta = "SELECT * FROM datosempresa WHERE email = '$usuario'";
    $resultado = mysqli_query($enlace, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // Si el email ya existe, actualizar los datos
        $consultaUpdate = "UPDATE datosempresa 
                           SET nombre = '$empresa', descripcion = '$descripcion', sitioweb = '$sitio', emailcontacto = '$contacto', telefono = '$telefono'
                           WHERE email = '$usuario'";
        mysqli_query($enlace, $consultaUpdate);
    } else {
        // Si no existe, insertar los nuevos datos
        $consultaInsert = "INSERT INTO datosempresa (email, nombre, descripcion, sitioweb, emailcontacto, telefono)
                           VALUES ('$usuario', '$empresa', '$descripcion', '$sitio', '$contacto', '$telefono')";
        mysqli_query($enlace, $consultaInsert);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($enlace);
}
?>
</html>



