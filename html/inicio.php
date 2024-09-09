<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Trabajo</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1E293B;
            color: #fff;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1, h2 {
            margin-bottom: 1rem;
        }

        .logo {
            margin-bottom: 2rem;
        }

        .buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        button {
            background-color: #3367D6;
            color: #fff;
            border: none;
            padding: 1rem 2rem;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2B54A8;
        }

        .hero {
            position: relative;
            display: flex;
            align-items: center;
            height: 100vh;
            width: 50%;
            background-color: #1E293B;
            color: #fff;
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("https://www.todo-trabajo.com/images/hero-image.jpg");
            background-size: cover;
            background-position: center;
            opacity: 0.5;
            filter: blur(5px);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            padding: 2rem;
        }

        .hero-text {
            text-align: center;
        }

        .hero-text h1 {
            font-size: 3rem;
        }

        .hero-text h2 {
            font-size: 2rem;
        }

        .cta {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
        }

        .cta button {
            background-color: #3367D6;
            color: #fff;
            border: none;
            padding: 1rem 2rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .cta button:hover {
            background-color: #2B54A8;
        }

        .about {
            padding: 2rem;
            text-align: center;
        }

        .about p {
            margin-top: 1rem;
        }

        .footer {
            background-color: #2B54A8;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="https://www.todo-trabajo.com/images/logo.svg" alt="Todo Trabajo Logo">
            </div>
            <h1>Todo Trabajo</h1>
            <h2>Tu futuro comienza aquí</h2>
        </div>
    </header>

    <section class="hero">
        <div class="hero-image"></div>
        <div class="hero-content">
            <div class="hero-text">
                <h1>Encuentra el trabajo ideal</h1>
                <h2>Conéctate con miles de oportunidades laborales</h2>
            </div>
            <div class="cta">
                <button>Postulante</button>
                <button>Empleador</button>
            </div>
        </div>
    </section>

    <section class="about">
        <p>Somos la plataforma que facilita la conexión entre talento y empresas. Encuentra oportunidades laborales en diversas industrias y avanza en tu carrera profesional con nosotros. Únete hoy para descubrir nuevas oportunidades que se alineen con tus habilidades y experiencia.</p>
    </section>

    <footer class="footer">
        <p>© 2023 Todo Trabajo. Todos los derechos reservados.</p>
        <a href="#">Asistencia</a> | <a href="#">Ingresar</a> | <a href="#">Registrarme</a>
    </footer>
</body>
</html>