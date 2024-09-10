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
    <h2>Modificar Perfil de Empresa</h2>
    <form  method="POST" class="profile-form">
        <label for="nombre">Nombre de la Empresa:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre de la Empresa" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>

        <label for="direccion">SitioWeb:</label>
        <input type="text" id="direccion" name="sitioweb" placeholder="Dirección" required>

        <label for="descripcion">Descripción de la Empresa:</label>
        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe tu empresa..."></textarea>
    
        <!-- Botón de enviar -->
        <button type="submit" name="guardar">Guardar Cambios</button>

    </form>

</main>

</body>


<?php 
if (isset($_POST['guardar'])) {
    // Datos de la empresa obtenidos del formulario
    $empresa = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $sitio = $_POST['sitioweb'];
    $contacto = $_POST['email'];
    $telefono = $_POST['telefono'];

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

<script>
/*    // Seleccionar el botón, el contenedor de proyectos y el mensaje
    const addProjectBtn = document.getElementById('add-project-btn');
    const projectFieldsContainer = document.getElementById('project-fields');
    const message = document.getElementById('message');

    // Función para añadir un nuevo campo de proyecto
    addProjectBtn.addEventListener('click', function() {
        // Obtener el último conjunto de campos de proyecto
        const lastProject = projectFieldsContainer.lastElementChild;
        const lastProjectInput = lastProject.querySelector('input');
        const lastProjectTextarea = lastProject.querySelector('textarea');

        // Verificar si el nombre del proyecto y la descripción están completos
        if (lastProjectInput.value.trim() === "" || lastProjectTextarea.value.trim() === "") {
            message.textContent = 'Por favor, completa el nombre y la descripción del proyecto antes de agregar uno nuevo.';
            message.classList.add('visible');
            return; // Detener la función si no se completaron los campos
        }

        // Limpiar el mensaje de aviso si los campos están completos
        message.textContent = '';
        message.classList.remove('visible');

        // Crear un nuevo div de proyecto
        const newProjectDiv = document.createElement('div');
        newProjectDiv.classList.add('project');
        
        // Crear el nuevo input de nombre de proyecto
        const newProjectInput = document.createElement('input');
        newProjectInput.type = 'text';
        newProjectInput.name = 'project_name[]';
        newProjectInput.placeholder = 'Nombre del proyecto';

        // Crear el nuevo textarea de descripción de proyecto
        const newProjectTextarea = document.createElement('textarea');
        newProjectTextarea.name = 'project_description[]';
        newProjectTextarea.placeholder = 'Descripción corta del proyecto';

        // Agregar los elementos al nuevo div
        newProjectDiv.appendChild(newProjectInput);
        newProjectDiv.appendChild(newProjectTextarea);

        // Añadir el nuevo div al contenedor de proyectos
        projectFieldsContainer.appendChild(newProjectDiv);
    });*/
</script>
</html>
