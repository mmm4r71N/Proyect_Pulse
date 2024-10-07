<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" type="text/css" href="../css/DiseInicio.css">
</head>

<body>
    <div class="body1">

        <nav class="navbar">
            <a href="index.php">
                <img src="../img/LogoProyectPulse-01.png" alt="Inicio" class="nav-logo">
            </a>
            <ul class="nav-links">
                <li><a href="login.php">Login</a></li>
                <li><a href="seleccionregistro.php">Registrarse</a></li>
            </ul>
        </nav>
        <div class="container">
            <h1>ProyectPulse</h1>
            <h2>Tu futuro es acá</h2>
            <p >Somos la plataforma que facilita la conexión entre talento y empresas.
                Encuentra oportunidades laborales en diversas industrias y avanza en tu carrera profesional con
                nosotros. Únete hoy para descubrir nuevas oportunidades que se alineen con tus habilidades y
                experiencia.</p>

            <form>
                <div class="radio-buttons">
                    <button type="button" onclick="window.location.href='registroempresa.php'">Empresa</button>
                    <button type="button" onclick="window.location.href='registropostulante.php'">Postulante</button>
                </div>
            </form>
        </div>
    </div>
    <div class="body2">
        <div class="seccion-inscripcion">
            <h2>¿Te cuesta buscar trabajo?</h2>
            <p>Nosotros podemos buscar los puestos que necesitas y postularse!</p>
            <a href="seleccionregistro.php">
                <button>Inscripción</button>
            </a>
        </div>
    </div>

    <div class="body3">

        <section class="testimonios">
            <div class="testimonio">
                <div class="stars">★★★★★</div>
                <p>Hola te quería agradecer hace 2 días los tengo en IG... la estaba pasando mal y ayer buscando, había un laburo cerca de casa y le mandé CV y hoy me llamaron... estoy muy contento, es de muchísima ayuda esta página, gracias.</p>
            </div>
            <div class="testimonio">
                <div class="stars">★★★★★</div>
                <p>Quería agradecerle, porque gracias a una publicación que hicieron conseguí trabajo, arranco el día jueves, muchísimas gracias, por más gente como ustedes.</p>
                <span>- Gerpe Ignacio</span>
            </div>
            <div class="testimonio">
                <div class="stars">★★★★★</div>
                <p>Muchísimas gracias por el CV, gracias a ustedes pude conseguir empleo para poder salir adelante con mi familia, muchísimas gracias, son unos genios, se los re agradezco.</p>
                <span>- Why so serious</span>
            </div>
        </section>
        
        <section class="servicios">
            <div class="servicio">
                <div class="ribbon">SERVICIOS</div>
                <div class="icon">🧑‍💼</div>
                <h3>Reclutamiento</h3>
                <p>Encontramos el mejor talento para tu empresa.</p>
            </div>
            <div class="servicio">
                <div class="ribbon">SERVICIOS</div>
                <div class="icon">👨‍💼</div>
                <h3>Busqueda</h3>
                <p>Te ayudamos a encontrar el trabajo que siempre quisiste</p>
            </div>
        </section>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>Proyect Pulse</h2>
                <p>
                    Somos una empresa especializada en ayudar a individuos a encontrar empleos que se adapten a sus habilidades y experiencia. Trabajamos con una variedad de organizaciones para conectar a los candidatos con las mejores oportunidades laborales.
                </p>
                <p>
                    📍 Argentina | Buenos Aires | Ramos Mejia<br>
                    ✉️ info@proyectpulse.com
                </p>
            </div>

            <div class="footer-right">
                <h3>Enlaces útiles</h3>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>©2024 | Desarrollado por <a href="#">K.N.O.S.A.</a></p>
        </div>
    </footer>
</body> 