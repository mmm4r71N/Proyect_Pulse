<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" type="text/css" href="../css/DiseñoEmpresaPostulante.css">
</head>
<body>
    <nav class="navbar">
        <a href="inicio.php">
            <img src="../img/LogoProyectPulse-01.png" alt="Inicio" class="nav-logo">
        </a>
        <ul class="nav-links">
            <li><a href="login.php">Login</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
        </ul>
    </nav> 
    <div class="container">
        <h1>ProyectPulse</h1>
        <p>Seleccione el tipo de cuenta:</p>
        
        <form>
            <div class="radio-buttons">
                <button type="button" onclick="window.location.href='registroempresa.php'">Empresa</button>
                <button type="button" onclick="window.location.href='registropostulante.php'">Postulante</button>
            </div>
        </form>
    </div>
</body>

