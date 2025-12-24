<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIS7AR | Estructuras Metálicas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            /* Paleta basada en Logo Industrial */
            --primary-color: #002D5A;
            /* Azul Marino Industrial */
            --accent-color: #333;
            /* Naranja de Seguridad / Herrería */
            --bg-dark: #121212;
            --text-light: #F8F9FA;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            color: #333;
            scroll-behavior: smooth;
        }

        h1,
        h2,
        h3,
        .navbar-brand {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* HEADER & LOGO */
        .navbar {
            background-color: var(--primary-color);
            border-bottom: 3px solid var(--accent-color);
            padding: 15px 0;
        }

        .logo-container img {
            max-height: 160px;
            filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.5));
            position: absolute;
            top: -30px;
            background-color: white;
            border-radius: 45%;
            top: 5%;
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
        }

        /* SLIDESHOW (HERO) */
        .carousel-item {
            height: 85vh;
            min-height: 500px;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-left: 5px solid var(--accent-color);
            bottom: 20%;
        }

        .slide-1 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/01.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .slide-2 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/02.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .slide-3 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/03.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        /* SECTION WITH BACKGROUND STRUCTURE */
        .structure-bg {
            background: linear-gradient(to right, rgba(0, 45, 90, 0.9), rgba(0, 45, 90, 0.7)), url('https://images.unsplash.com/photo-1498317173027-2b22f4b7c6c9?q=80&w=1470&auto=format&fit=crop');
            background-attachment: fixed;
            background-size: cover;
            color: white;
            padding: 100px 0;
        }

        /* CARDS & BUTTONS */
        .btn-vistar {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 12px 25px;
            font-weight: bold;
            border-radius: 0;
        }

        .btn-vistar:hover {
            background-color: #d38312;
            color: white;
            transform: translateY(-2px);
        }

        .principle-card {
            border: none;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-top: 5px solid var(--accent-color);
            transition: 0.3s;
        }

        .principle-card:hover {
            transform: scale(1.05);
        }

        /* FOOTER */
        footer {
            background: var(--bg-dark);
            color: #888;
            border-top: 5px solid var(--primary-color);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <div class="logo-container me-2">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo VIS7AR">
                </div>
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proposito">Propósito</a></li>
                    <li class="nav-item"><a class="nav-link" href="#quienes-somos">¿Quiénes Somos?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#equipo">Gobernanza</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portafolio">Portafolio</a></li>
                    <li class="nav-item"><a class="nav-link btn-vistar ms-lg-4"
                            href="mailto:ventas@vis7ar.com">Solicitar Presupuesto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="vistarHero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#vistarHero" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#vistarHero" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#vistarHero" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active slide-1">
                <div class="carousel-caption text-start col-lg-6">
                    <h1 class="display-4 fw-bold">Maestros en <span style="color: var(--accent-color);">Soldadura</span>
                    </h1>
                    <p class="lead">Fabricación técnica con estándares de precisión industrial.</p>
                </div>
            </div>
            <div class="carousel-item slide-2">
                <div class="carousel-caption text-start col-lg-6">
                    <h1 class="display-4 fw-bold">Estructuras <span style="color: var(--accent-color);">Sólidas</span>
                    </h1>
                    <p class="lead">"Si no deja margen, no es proyecto. Si no deja caja, no es empresa."</p>
                </div>
            </div>
            <div class="carousel-item slide-3">
                <div class="carousel-caption text-start col-lg-6">
                    <h1 class="display-4 fw-bold">Visión <span style="color: var(--accent-color);">Metálica</span></h1>
                    <p class="lead">Soluciones de ingeniería que garantizan el éxito de su obra.</p>
                </div>
            </div>
        </div>
    </div>

    <section id="proposito" class="proposito-section">
        <div class="container">
            <div class="proposito-glass-box text-center">
                <div class="site-heading">
                    <span class="site-title-tagline"><i class="fas fa-bullseye"></i> Nuestra Razón de Ser</span>
                    <h2 class="site-title text-white">Construimos con <span>Propósito</span></h2>
                </div>

                <p class="proposito-text">
                    "Transformar el acero en soluciones de ingeniería sólidas y rentables, garantizando la excelencia
                    técnica en cada montaje y promoviendo la estabilidad financiera de nuestros socios y equipo, bajo
                    una cultura de transparencia donde cada obra respalda la calidad, la confianza y el compromiso
                    asumido."
                </p>

                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="proposito-item">
                            <div class="icon-wrap">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <h4>Rigor Técnico</h4>
                            <p>Cada corte y soldadura sigue un estándar de precisión absoluta.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proposito-item">
                            <div class="icon-wrap">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Valor Real</h4>
                            <p>Operamos bajo un modelo de rentabilidad que asegura la calidad de los materiales.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proposito-item">
                            <div class="icon-wrap">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Estabilidad</h4>
                            <p>Estructuras diseñadas para perdurar y procesos internos para crecer con solidez.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .proposito-section {
            position: relative;
            padding: 100px 0;
            /* IMAGEN DE FONDO DE ESTRUCTURA */
            /* background: url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1600') no-repeat center center; */
            background-color:  rgba(0, 45, 90, 0.7);
            background-size: cover;
            background-attachment: fixed;
        }

        .proposito-glass-box {
            background: rgba(0, 45, 90, 0.7);
            /* Azul corporativo con transparencia */
            backdrop-filter: blur(10px);
            /* Efecto de desenfoque */
            -webkit-backdrop-filter: blur(10px);
            padding: 60px 40px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .proposito-text {
            font-size: 1.4rem;
            font-style: italic;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
            color: #e0e0e0;
        }

        .icon-wrap {
            font-size: 3rem;
            color: #F39C12;
            /* Naranja de seguridad del logo */
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .proposito-item:hover .icon-wrap {
            transform: translateY(-10px);
        }

        .proposito-item h4 {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .site-title span {
            color: #F39C12;
        }
    </style>
    <section id="quienes-somos" class="about-vistar-section">
        <div class="container">
            <div class="glass-container">
                <div class="text-center mb-5">
                    <span class="site-tagline">Trayectoria y Rigor</span>
                    <h2 class="display-4 fw-bold text-white">¿Quiénes <span>Somos?</span></h2>
                    <p class="lead mt-3 text-light">Somos una estructura familiar donde la pasión por el metal se une a
                        la estrategia financiera.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="about-card">
                            <div class="about-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>Misión</h3>
                            <p>Fabricar soluciones metálicas de alta precisión técnica bajo un modelo de rentabilidad
                                estricto, asegurando que cada proyecto sea sostenible y supere los estándares de
                                seguridad industrial.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about-card">
                            <div class="about-icon"><i class="fas fa-eye"></i></div>
                            <h3>Visión</h3>
                            <p>Ser la empresa de herrería industrial líder en confianza, reconocida por estabilizar
                                procesos antes de expandirnos y por entregar obras que se convierten en nuestra mejor
                                carta de ventas.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about-card">
                            <div class="about-icon"><i class="fas fa-handshake"></i></div>
                            <h3>Valores</h3>
                            <ul class="list-unstyled">
                                <li><strong>Excelencia Técnica:</strong> Trabajamos el acero con precisión, experiencia
                                    y responsabilidad, como propietarios del resultado final.</li>
                                <li><strong>Integridad Comercial:</strong>Cada proyecto se ejecuta con acuerdos claros y
                                    condiciones justas que garantizan la sostenibilidad de la obra y la empresa.</li>
                                <li><strong>Compromiso con la Calidad:</strong> Cada estructura refleja nuestro estándar
                                    de durabilidad, seguridad y cumplimiento técnico.</li>
                                <li><strong>Seguridad y Respeto:</strong>Protegemos a nuestro equipo, nuestros clientes
                                    y cada obra, priorizando prácticas seguras y un ambiente de respeto.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .about-vistar-section {
            padding: 100px 0;
            /* IMAGEN DE FONDO: EQUIPO DE SOLDADORES */
            background: linear-gradient(rgba(0, 45, 90, 0.6), rgba(0, 45, 90, 0.6)),
                url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .glass-container {
            background: rgba(255, 255, 255, 0.1);
            /* Fondo blanco traslúcido */
            backdrop-filter: blur(12px);
            /* Efecto de desenfoque */
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            padding: 60px 40px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .site-tagline {
            color: #F39C12;
            /* Naranja de seguridad */
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        h2 span {
            color: #F39C12;
        }

        .about-card {
            background: rgba(0, 45, 90, 0.4);
            /* Fondo azul traslúcido para las tarjetas */
            padding: 40px 30px;
            border-radius: 20px;
            height: 100%;
            transition: 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }

        .about-card:hover {
            transform: translateY(-10px);
            background: rgba(0, 45, 90, 0.7);
            border-color: #F39C12;
        }

        .about-icon {
            font-size: 3rem;
            color: #F39C12;
            margin-bottom: 20px;
        }

        .about-card h3 {
            font-family: 'Oswald', sans-serif;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .about-card ul li {
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
    </style>
    <section id="equipo" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary display-5">Gobernanza del Negocio</h2>
                <p class="lead mx-auto" style="max-width: 700px;">
                    VIS7AR es una estructura familiar sólida donde cada miembro lidera un pilar crítico para garantizar
                    la precisión técnica y el éxito financiero.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm team-card text-center p-3">
                        <div class="team-img-wrapper mb-3">
                            <img src="{{ asset('img/leo1.jpg') }}" class="img-fluid rounded shadow"
                                alt="Leonela Domínguez">
                        </div>
                        <h5 class="fw-bold mb-1">Leonela Domínguez</h5>
                        <p class="text-accent fw-bold small text-uppercase mb-2">Gerencia General & Ventas</p>
                        <p class="small text-muted">Líder estratégica enfocada en relaciones clave y visión comercial.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm team-card text-center p-3">
                        <div class="team-img-wrapper mb-3">
                            <img src="{{ asset('img/ran.png') }}" class="img-fluid rounded shadow"
                                alt="Ranyerís Domínguez">
                        </div>
                        <h5 class="fw-bold mb-1">Ranyerís Domínguez</h5>
                        <p class="text-accent fw-bold small text-uppercase mb-2">Jefe de Producción</p>
                        <p class="small text-muted">El "dueño del metal". Garantiza que cada soldadura cumpla con el
                            estándar técnico.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm team-card text-center p-3">
                        <div class="team-img-wrapper mb-3">
                            <img src="{{ asset('img/ger.png') }}"
                                class="img-fluid rounded shadow team-img"alt="Gersón Domínguez">
                        </div>
                        <h5 class="fw-bold mb-1">Gersón Domínguez</h5>
                        <p class="text-accent fw-bold small text-uppercase mb-2">Coordinador de Proyectos</p>
                        <p class="small text-muted">Amortiguador entre ventas y operación. Controla alcances y
                            cronogramas en obra.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm team-card text-center p-3">
                        <div class="team-img-wrapper mb-3">
                            <img src="{{ asset('img/mil.jpg') }}" class="img-fluid rounded shadow"
                                alt="Milca Domínguez">
                        </div>
                        <h5 class="fw-bold mb-1">Milca Domínguez</h5>
                        <p class="text-accent fw-bold small text-uppercase mb-2">Adm. & Finanzas</p>
                        <p class="small text-muted">Control total de facturación y pagos. Asegura la salud financiera
                            de la empresa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Estilos adicionales para las fotos de equipo */
        .team-card {
            transition: all 0.3s ease;
            border-bottom: 4px solid transparent !important;
        }

        .team-card:hover {
            transform: translateY(-10px);
            border-bottom: 4px solid var(--accent) !important;
        }

        .team-img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .team-img-wrapper img {
            width: 100%;
            height: 250px;
            /* ajusta según tu diseño */
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            /* opcional, para marco visible */
            overflow: hidden;
            object-fit: contain;
            /* Asegura que todas las fotos tengan el mismo tamaño */
        }

        .text-accent {
            color: #F39C12;
            /* El naranja del logo */
        }
    </style>
    <section id="portafolio" class="py-5 bg-dark">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-accent fw-bold text-uppercase">Portafolio</span>
                <h2 class="display-4 fw-bold text-white">Nuestras <span>Obras</span></h2>
                <div class="footer-divider mb-3" style="background: var(--accent); width: 80px; margin: 20px auto;">
                </div>
                <p class="text-light opacity-75"> Nuestra mejor publicidad es un trabajo bien hecho. En cada estructura y cada soldadura, garantizamos una calidad técnica superior que convierte a nuestros clientes en nuestra mejor referencia. Nuestra meta: que cada proyecto nos abra la puerta al siguiente.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item shadow">
                        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=800"
                            alt="Estructura Industrial" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Naves Industriales</h5>
                                <p>Diseño y montaje estructural</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item shadow">
                        <img src="https://images.unsplash.com/photo-1516937941344-00b4e0337589?q=80&w=800"
                            alt="Soldadura de Precisión" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Soldadura Técnica</h5>
                                <p>Procesos MIG/TIG certificados</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item shadow">
                        <img src="{{asset('img/mezzanine.png')}}"
                            alt="Herrería de Seguridad" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Mezzanines y Pisos</h5>
                                <p>Optimización de espacios metálicos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item shadow">
                        <img src="{{asset('img/CubiertasyTechos.jpg')}}"
                            alt="Techados Metálicos" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Cubiertas y Techos</h5>
                                <p>Estructuras para grandes luces</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item shadow">
                        <img src="{{asset('img/CubiertasyTechos.jpg')}}"
                            alt="Refuerzo Estructural" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Refuerzos de Acero</h5>
                                <p>Consolidación de edificaciones</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item shadow">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=800"
                            alt="Taller VIS7AR" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Fabricación a Medida</h5>
                                <p>Control total en taller</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            height: 300px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 45, 90, 0.8);
            /* Azul VIS7AR translúcido */
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.4s ease;
            padding: 20px;
            text-align: center;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-content h5 {
            color: #F39C12;
            /* Naranja de seguridad */
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .gallery-content p {
            color: white;
            font-size: 0.9rem;
        }

        .text-accent {
            color: #F39C12;
        }

        h2 span {
            color: #F39C12;
        }
    </style>

    <footer class="main-footer py-5">
        <div class="container text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo VIS7AR" class="footer-logo mb-4">

            <p class="footer-slogan">Estructuras Metálicas con Propósito</p>

            <div class="social-links mb-4">
                <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>

            <div class="footer-divider mb-3"></div>

            <p class="small opacity-75">&copy; 2025 VIS7AR. <br>
                <span class="text-accent">"Si no deja caja, no es empresa."</span>
            </p>
        </div>
    </footer>

    <style>
        /* Fondo oscuro consistente con el diseño industrial */
        .main-footer {
            background-color: #001a35;
            /* Azul muy oscuro */
            color: white;
        }

        /* FIX DE LA IMAGEN: Evita que exceda el tamaño */
        .footer-logo {
            max-width: 150px;
            /* Tamaño ideal para que se vea pequeña y elegante */
            height: auto;
            /* Mantiene la proporción original */
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .footer-logo:hover {
            transform: scale(1.05);
        }

        .footer-slogan {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        /* Estilo para los iconos sociales */
        .social-icon {
            color: white;
            font-size: 1.5rem;
            margin: 0 15px;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .social-icon:hover {
            color: #F39C12;
            /* Naranja de seguridad al pasar el mouse */
            transform: translateY(-3px);
        }

        .footer-divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
            width: 100px;
            margin: 0 auto;
        }

        .text-accent {
            color: #F39C12;
            font-weight: bold;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
