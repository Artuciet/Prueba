<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Adrian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40jBqzyPmk8gopz/7SqC7NIcjfBLQof7UjzeV1fP3s7D+cxtn/gB/L0t2v/x7F6dI+c2E/7+b+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        /* Estilos personalizados para El documento

        /* Header y Top Header */
        .top-header {
            background-color: #0d3967ff; /* Fondo azul para el top header */
            color: white; /* Color blanco para el texto del top header */
            padding: 20px 0;
            font-size: 0.9rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1); /* Línea de separación sutil */
        }

        .transparent-header {
            background-color: transparent; /* Fondo transparente al inicio */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .transparent-header .navbar-brand .scrolled-logo {
            display: none;
        }

        .transparent-header .navbar-brand .initial-logo {
            display: block;
        }

        /* Header al hacer scroll */
        .scrolled-header {
            background-color: #0d3967ff; /* Fondo azul para el top header */
            !important; /* Fondo azul al hacer scroll */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .scrolled-header .navbar .nav-link {
            color: white !important; /* Opciones de menú en blanco */
        }

        .scrolled-header .navbar-brand .initial-logo {
            display: none !important;
        }

        .scrolled-header .navbar-brand .scrolled-logo {
            display: block !important;
        }

        /* Efecto hover en las opciones del menú */
        .navbar .nav-item .nav-link {
            transition: color 0.3s ease;
            color: rgba(0, 0, 0, 0.7); /* Color inicial de los enlaces */
        }

        .navbar .nav-item .nav-link:hover {
            color: #ffc107 !important; /* Ejemplo: un amarillo para el hover, similar al botón */
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 100vh; /* Altura completa de la ventana */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        #heroVideo {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translateX(-50%) translateY(-50%);
            background-size: cover;
            background-position: center;
        }

        .hero-section .container {
            z-index: 1;
        }

        /* Aumento del borde redondeado para las tarjetas */
        .card,
        .form-card {
            border-radius: 20px; /* Ajusta este valor para más o menos redondeado */
        }

        /* Efecto hover para botones */
        .btn {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px); /* Pequeño levantamiento al pasar el ratón */
        }

        .btn-warning:hover {
            background-color: #e0a800; /* Amarillo más oscuro al pasar el ratón */
            border-color: #e0a800;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el ratón */
            border-color: #0056b3;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }

        /* Sección About Us - Orden del contenido en móvil */
        @media (max-width: 991.98px) {
            #about-us .col-lg-6.order-lg-1.order-2 {
                order: 2 !important; /* Texto después de la imagen en móvil */
            }
            #about-us .col-lg-6.order-lg-2.order-1 {
                order: 1 !important; /* Imagen primero en móvil */
                margin-bottom: 1.5rem; /* Espacio entre imagen y texto */
            }
        }

        /* Beneficios - Círculos organizados en grupos de dos por fila en vista móvil */
        @media (max-width: 767.98px) {
            #benefits .col-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            .benefit-circle {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-bottom: 1rem; /* Espaciado entre filas */
            }
            .benefit-circle img, .benefit-circle i {
                margin-bottom: 0.5rem; /* Espacio entre el icono/imagen y el texto */
            }

            /* Textos y elementos centrados en vista móvil */
            .text-center-mobile {
                text-align: center !important;
            }
        }

        /* Study Careers - Efecto zoom en imagen al hacer hover */
        .career-card img {
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .career-card:hover img {
            transform: scale(1.08);
        }

        /* Study Careers - Todas las tarjetas con el mismo tamaño en vista móvil */
        @media (max-width: 767.98px) {
            #study-careers .career-card {
                height: auto !important;
                min-height: unset;
            }
            #study-careers .col-md-4 {
                margin-bottom: 1rem;
            }
        }

        /* Team Section - Posicionamiento de la imagen circular "entre centro y top" */
        .team-member-card .card .img-background-container {
            position: relative;
            height: 180px;
            overflow: hidden;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .team-member-card .card .img-background-container img.card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .team-member-card .card .profile-img-specific {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 35%;
            width: 150px;
            height: 150px;
            border: 10px solid white;
            object-fit: cover;
            z-index: 2;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para las otras imágenes de equipo que no tienen fondo */
        .team-member-card .card .profile-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        /* Team Carousel para vista móvil: 1 ítem */
        @media (max-width: 767.98px) {
            #teamCarousel .carousel-inner .carousel-item .col-md-3:not(:first-child) {
                display: none !important;
            }
            #teamCarousel .carousel-inner .carousel-item .col-md-3 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        /* Reviews - Contenedor de video y miniatura */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            background-color: #000;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .video-thumbnail {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .video-thumbnail:hover .fa-play-circle {
            color: rgba(255, 255, 255, 1);
            transform: scale(1.1);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Footer */
        footer .list-unstyled a,
        footer .social-links a,
        footer .text-white-50 {
            color: rgba(255, 255, 255, 0.7) !important;
            transition: color 0.2s ease;
        }

        footer .list-unstyled a:hover,
        footer .social-links a:hover,
        footer .text-white-50:hover {
            color: white !important;
        }

        /* Alineación de texto en móvil para el footer */
        @media (max-width: 767.98px) {
            footer .col-md-3 {
                text-align: center !important;
            }
            footer .list-unstyled {
                padding-left: 0;
            }
        }
    </style>
</head>
<body>

    <header class="fixed-top transparent-header">
        <div class="top-header">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="contact-info">
                    <span><i class="fas fa-phone mr-1"></i> +1 (234) 567-890</span>
                    <span class="ml-3"><i class="fas fa-envelope mr-1"></i> info@universalad.com</span>
                </div>
                <div class="social-links">
                    <a href="https://facebook.com" target="_blank" class="mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank" class="mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="TEST-SPANISH/TEST-SPANISH/Imagenes/LOGO.png" alt="Universidad logo" class="initial-logo d-block mx-auto" style="max-width: 80px; height: auto;">
                    <img src="img/logo-white.png" alt="Universidad Logo White" class="scrolled-logo d-none">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto color-primary">
                      <li class="nav-item">
                        <a class="nav-link" href="#hero">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#the-most-popular">Courses</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#about-us">Team</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#benefits">Contact Us</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero" class="hero-section">
        <video autoplay muted loop id="heroVideo">
            <source src="TEST-SPANISH/TEST-SPANISH/Videos/hero-video.mp4" type="video/mp4">
        </video>
        <div class="container d-flex align-items-center justify-content-start h-100">
            <div class="row w-100">
                <div class="col-lg-6 text-white text-center-mobile">
                    <h1 class="display-4">Welcome to the University</h1>
                    <p class="lead mt-3">We are an online platform to make learning.</p>
                    <button class="btn btn-warning btn-lg mt-4">Get Now</button>
                </div>
                <div class="col-lg-6 d-flex justify-content-center mt-5 mt-lg-0">
                    <div class="card p-4 shadow-lg form-card" style="max-width: 400px; width: 100%;">
                        <h5 class="card-title text-center text-primary mb-4">Regístrate Hoy</h5>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-4">Send</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="the-most-popular" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 font-weight-bold">Lo Más Popular</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card course-card h-100 shadow-sm">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE CURSO 1.jpg" class="card-img-top" alt="Diseño Web">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title font-weight-bold">Diseño Web Avanzado</h5>
                            <p class="card-text text-muted flex-grow-1">Aprende a crear sitios web interactivos y modernos con las últimas tecnologías.</p>
                            <a href="#" class="btn btn-warning mt-auto">Ver Curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card course-card h-100 shadow-sm">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE CURSO 2.jpg" class="card-img-top" alt="Marketing Digital">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title font-weight-bold">Estrategias de Marketing Digital</h5>
                            <p class="card-text text-muted flex-grow-1">Domina SEO, SEM, redes sociales y email marketing para impulsar tu negocio.</p>
                            <a href="#" class="btn btn-warning mt-auto">Ver Curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card course-card h-100 shadow-sm">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE CURSO 3.jpg" class="card-img-top" alt="Ciencia de Datos">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title font-weight-bold">Introducción a la Ciencia de Datos</h5>
                            <p class="card-text text-muted flex-grow-1">Explora los fundamentos del análisis de datos, machine learning y visualización.</p>
                            <a href="#" class="btn btn-warning mt-auto">Ver Curso</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card course-card h-100 shadow-sm">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE CURSO 4.jpg" class="card-img-top" alt="Desarrollo Personal">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title font-weight-bold">Liderazgo y Desarrollo Personal</h5>
                            <p class="card-text text-muted flex-grow-1">Potencia tus habilidades de liderazgo y crecimiento personal para el éxito.</p>
                            <a href="#" class="btn btn-warning mt-auto">Ver Curso</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary btn-lg">Explorar Todos los Cursos</button>
            </div>
        </div>
    </section>

    <section id="about-us" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2 text-center-mobile">
                    <h2 class="display-4 font-weight-bold mb-4">Sobre Nosotros</h2>
                    <p class="lead">Universalad es una plataforma educativa online dedicada a ofrecer acceso global a conocimiento de alta calidad. Creemos firmemente en el poder de la educación para transformar vidas y carreras.</p>
                    <p>Nuestra misión es empoderar a estudiantes de todo el mundo con cursos interactivos, impartidos por expertos de la industria, y una experiencia de aprendizaje flexible que se adapta a sus necesidades.</p>
                    <button class="btn btn-warning btn-lg mt-4">Conoce Más</button>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 text-center mb-4 mb-lg-0">
                    <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE ABOUT US.jpg" class="img-fluid rounded shadow-lg" alt="Sobre Nosotros" style="height: 320px;">
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 font-weight-bold">Beneficios de Estudiar con Nosotros</h2>
            <div class="row text-center">
                <div class="col-6 col-md-3 mb-4">
                    <div class="benefit-circle mx-auto">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/ICONO 1.png" alt="Acceso Global" class="mb-2" style="width: 80px; height: 80px;">
                        <p class="mb-0">Excelente Contenido</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="benefit-circle mx-auto">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/ICONO 2.png" alt="Acceso Global" class="mb-2" style="width: 80px; height: 80px;">
                        <p class="mb-0">Instructores Expertos</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="benefit-circle mx-auto">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/ICONO 3.png" alt="Acceso Global" class="mb-2" style="width: 80px; height: 80px;">
                        <p class="mb-0">Certificaciones Profesionales</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="benefit-circle mx-auto">
                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/ICONO 4.png" alt="Acceso Global" class="mb-2" style="width: 80px; height: 80px;">
                        <p class="mb-0">Cursos Innovadores</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="study-careers" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 font-weight-bold">Explora las Diferentes Carreras que Ofrecemos</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card career-card h-100 shadow-sm">
                        <img src="img/career1.jpg" class="card-img-top" alt="Marketing">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title font-weight-bold">Marketing Digital</h5>
                            <p class="card-text text-muted flex-grow-1">Conviértete en un experto en la promoción de productos y servicios en el mundo digital.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Ver Detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card career-card h-100 shadow-sm">
                        <img src="img/career2.jpg" class="card-img-top" alt="Desarrollo Web">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title font-weight-bold">Desarrollo Web Full Stack</h5>
                            <p class="card-text text-muted flex-grow-1">Aprende a construir aplicaciones web completas, desde el frontend hasta el backend.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Ver Detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card career-card h-100 shadow-sm">
                        <img src="img/career3.jpg" class="card-img-top" alt="Data Science">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title font-weight-bold">Ciencia de Datos e IA</h5>
                            <p class="card-text text-muted flex-grow-1">Explora el análisis de grandes volúmenes de datos y el desarrollo de inteligencia artificial.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary btn-lg">Ver Todas las Carreras</button>
            </div>
        </div>
    </section>
    <section id="team" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 font-weight-bold">Conoce a Nuestro Equipo</h2>
            <div id="teamCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-sm-6 mb-4 team-member-card">
                                <div class="card text-center h-100 shadow-sm">
                                    <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE TEAM 1.jpg" class="card-img-top rounded-circle mx-auto mt-3 profile-img" alt="John Smith">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">John Smith</h5>
                                        <p class="card-text text-muted">Math Teacher</p>
                                        <div class="social-icons mt-3">
                                            <a href="https://linkedin.com" target="_blank" class="text-primary mr-2"><i class="fab fa-linkedin fa-lg"></i></a>
                                            <a href="https://twitter.com" target="_blank" class="text-primary"><i class="fab fa-twitter fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4 team-member-card d-none d-md-block">
                                <div class="card text-center h-100 shadow-sm">
                                    <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE TEAM 2.jpg" class="card-img-top rounded-circle mx-auto mt-3 profile-img" alt="Dave Morgan">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Dave Morgan</h5>
                                        <p class="card-text text-muted">Math Teacher</p>
                                        <div class="social-icons mt-3">
                                            <a href="https://linkedin.com" target="_blank" class="text-primary mr-2"><i class="fab fa-linkedin fa-lg"></i></a>
                                            <a href="https://twitter.com" target="_blank" class="text-primary"><i class="fab fa-twitter fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4 team-member-card d-none d-md-block">
                                <div class="card text-center h-100 shadow-sm">
                                    <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE TEAM 4.jpg" class="card-img-top rounded-circle mx-auto mt-3 profile-img" alt="Zara Smith">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Zara Smith</h5>
                                        <p class="card-text text-muted">Biology Teacher</p>
                                        <div class="social-icons mt-3">
                                            <a href="https://linkedin.com" target="_blank" class="text-primary mr-2"><i class="fab fa-linkedin fa-lg"></i></a>
                                            <a href="https://twitter.com" target="_blank" class="text-primary"><i class="fab fa-twitter fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4 team-member-card d-none d-md-block">
                                <div class="card text-center h-100 shadow-sm">
                                    <div class="img-background-container">
                                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE BACKGROUND CARD TEAM (3).jpg" class="card-img-top" alt="Background">
                                        <img src="TEST-SPANISH/TEST-SPANISH/imagenes/IMAGE TEAM 3.jpg" class="rounded-circle profile-img-specific" alt="Jimena Soto">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Jimena Soto</h5>
                                        <p class="card-text text-muted">Math Teacher</p>
                                        <div class="social-icons mt-3">
                                            <a href="https://linkedin.com" target="_blank" class="text-primary mr-2"><i class="fab fa-linkedin fa-lg"></i></a>
                                            <a href="https://twitter.com" target="_blank" class="text-primary"><i class="fab fa-twitter fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-3 col-sm-6 mb-4 team-member-card">
                                <div class="card text-center h-100 shadow-sm">
                                    <img src="img/team5.jpg" class="card-img-top rounded-circle mx-auto mt-3 profile-img" alt="Michael Brown">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Michael Brown</h5>
                                        <p class="card-text text-muted">Especialista en QA</p>
                                        <div class="social-icons mt-3">
                                            <a href="https://linkedin.com" target="_blank" class="text-primary mr-2"><i class="fab fa-linkedin fa-lg"></i></a>
                                            <a href="https://twitter.com" target="_blank" class="text-primary"><i class="fab fa-twitter fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#teamCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#teamCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </section>
    <section id="reviews" class="py-5 bg-primary text-white">
        <div class="container">
            <h2 class="text-center mb-5 font-weight-bold">Lo que Nuestros Estudiantes Dicen</h2>
            <div id="reviewsCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="embed-responsive embed-responsive-16by9 video-container">
                                    <div class="video-thumbnail" data-video-id="VIDEO_ID_1" style="background-image: url('TEST-SPANISH/TEST-SPANISH/imagenes/Image video.jpg');">
                                        <i class="far fa-play-circle fa-5x"></i>
                                    </div>
                                    <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="embed-responsive embed-responsive-16by9 video-container">
                                    <div class="video-thumbnail" data-video-id="VIDEO_ID_2" style="background-image: url('TEST-SPANISH/TEST-SPANISH/imagenes/Image video.jpg');">
                                        <i class="far fa-play-circle fa-5x"></i>
                                    </div>
                                    <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#reviewsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#reviewsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 text-center-mobile">
                    <img src="img/footer-logo.png" alt="Universalad Footer Logo" class="img-fluid mb-3" style="max-height: 50px;">
                    <p class="text-muted">Universalad es tu puerta al conocimiento global. Educación de calidad, a tu alcance.</p>
                </div>
                <div class="col-md-3 mb-4 text-center-mobile">
                    <h5 class="mb-3">Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#hero" class="text-white-50">Home</a></li>
                        <li><a href="#the-most-popular" class="text-white-50">Lo Más Popular</a></li>
                        <li><a href="#about-us" class="text-white-50">Sobre Nosotros</a></li>
                        <li><a href="#benefits" class="text-white-50">Beneficios</a></li>
                        <li><a href="#study-careers" class="text-white-50">Carreras</a></li>
                        <li><a href="#team" class="text-white-50">Equipo</a></li>
                        <li><a href="#reviews" class="text-white-50">Testimonios</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 text-center-mobile">
                    <h5 class="mb-3">Contacto</h5>
                    <ul class="list-unstyled">
                        <li><a href="tel:+1234567890" class="text-white-50"><i class="fas fa-phone mr-2"></i> +1 234 567 890</a></li>
                        <li><a href="mailto:info@universalad.com" class="text-white-50"><i class="fas fa-envelope mr-2"></i> info@universalad.com</a></li>
                        <li><a href="http://maps.google.com/?q=TuDireccionAqui" target="_blank" class="text-white-50"><i class="fas fa-map-marker-alt mr-2"></i> Tu Dirección Aquí</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 text-center-mobile">
                    <h5 class="mb-3">Newsletter</h5>
                    <p class="text-muted">Suscríbete a nuestro boletín para recibir actualizaciones y ofertas.</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Tu Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Suscribir</button>
                            </div>
                        </div>
                    </form>
                    <div class="social-links mt-3">
                        <a href="https://facebook.com" target="_blank" class="text-white mr-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="https://twitter.com" target="_blank" class="text-white mr-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="https://instagram.com" target="_blank" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                <p class="mb-0 text-muted">© 2025 Universalad. Todos los derechos reservados. Diseñado por <a href="https://striveenterprise.com" target="_blank" class="text-white-50">Jose Silvera</a></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <script>
        // Efecto del header al hacer scroll
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('header').addClass('scrolled-header').removeClass('transparent-header');
            } else {
                $('header').removeClass('scrolled-header').addClass('transparent-header');
            }
        });

        // Carrusel de videos
        $('.video-thumbnail').on('click', function() {
            var videoId = $(this).data('video-id');
            var iframe = $(this).siblings('iframe');
            // Aquí deberías construir la URL del video. Si son de YouTube, sería:
            // var videoSrc = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
            // Para este ejemplo, dejo una URL genérica o la que tú tengas.
            var videoSrc = 'video/your-video-name.mp4'; // Reemplaza con tu video real
            iframe.attr('src', videoSrc);
            $(this).hide();
        });

        // Reinicia el video al cambiar de slide en el carrusel de reseñas
        $('#reviewsCarousel').on('slide.bs.carousel', function () {
            $('.video-container iframe').attr('src', '');
            $('.video-thumbnail').show();
        });

        // Ajuste para el carrusel de equipo en vista móvil
        $('#teamCarousel').carousel({
            interval: false
        });

        // Lógica para mostrar 1 item en móvil y 4 en PC para el carrusel de equipo
        function checkTeamCarouselItems() {
            if ($(window).width() < 768) {
                $('#teamCarousel .carousel-inner .carousel-item .team-member-card:not(:first)').addClass('d-none');
            } else {
                $('#teamCarousel .carousel-inner .carousel-item .team-member-card:not(:first)').removeClass('d-none');
            }
        }
        $(window).on('resize', checkTeamCarouselItems);
        $(document).ready(checkTeamCarouselItems);

        // Smooth scroll para los enlaces del menú y footer
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.hash);
            if(target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - $('header').outerHeight()
                }, 800);
            }
        });

    </script>
</body>
</html>
 -->
</html>