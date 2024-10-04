<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    HAM-LP - Honorable Alcaldía Municipal de La Paz
    </title>
    
    <style>
        .navbar-custom {
            background-color: #3498db;
        }
        .navbar-custom .navbar-nav .nav-link {
            color: white;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            margin: 0 0.25rem;
        }
        .navbar-custom .navbar-nav .nav-link:hover {
            color: black;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 0.25rem;
        }
        .navbar-custom .btn-login {
            font-size: 1.1rem;
            padding: 0.5rem 1.5rem;
        }
    </style>
    <!-- llamado a mi archivo bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#inicio">
                    <img src="img/icono.png" alt="Icono de la Alcaldía" width="60" height="60" class="d-inline-block align-top me-2">
                </a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-5" href="#inicio">
                            Inicio
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Trámites
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#tramites">
                                    Ficha Catastral 1
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#tramites">
                                    Ficha Catastral 2
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#tramites">
                                    Ficha Catastral 3
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-5" href="#normativa">
                            Normativa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-5" href="#contacto">
                            Contacto
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="#login" data-bs-toggle="modal" class="btn btn-warning btn-lg fw-bold px-4 py-2 fs-5">
                    <i class="bi bi-person me-2"></i>
                    Login
                </a>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        <section id="inicio">
            <center><img src="img/alcalde.jpg" alt="Vista del alcalde" class="img-fluid rounded" style="width: 1000px; height: 500px;"></center>
            <h1 class="mb-4">Bienvenidos a la Honorable Alcaldía Municipal de La Paz</h1>
            <div class="row">
                <div class="col-md-6">
                    <p>La Honorable Alcaldía Municipal de La Paz está comprometida con el desarrollo y bienestar de nuestra ciudad. Nuestro objetivo es facilitar el acceso a la información y garantizar que todos los ciudadanos tengan un registro claro y transparente de los terrenos en la ciudad.</p>
                    <p>En nuestra alcaldía, entendemos la importancia de un registro adecuado de las propiedades, no solo para los dueños, sino también para la planificación urbana y el desarrollo sostenible de La Paz. Nos esforzamos por promover el ordenamiento territorial y asegurar que cada terreno esté debidamente registrado y regulado.</p>
                    <h3>Servicios que ofrecemos:</h3>
                    <ul>
                        <li><strong>Registro de Terrenos y Propiedades:</strong> Proceso para registrar nuevos terrenos y propiedades, asegurando que cada propiedad tenga su documentación adecuada.</li>
                        <li><strong>Consulta de Estado de Registro:</strong> Verificación del estado de registro de terrenos y propiedades a través de nuestro portal en línea o de manera presencial.</li>
                        <li><strong>Asesoramiento Legal:</strong> Brindamos asistencia legal en temas relacionados con la propiedad, incluidas disputas sobre límites y herencias.</li>
                        <li><strong>Verificación de Documentos:</strong> Servicio para validar la autenticidad de documentos relacionados con terrenos y propiedades.</li>
                        <li><strong>Eventos y Talleres Informativos:</strong> Ofrecemos talleres y seminarios sobre el proceso de registro, derechos de propiedad, y planificación urbana.</li>
                    </ul>
                    <p>Para más información sobre nuestros servicios, no dude en <a href="#contacto">contactarnos</a> o visitar nuestras secciones de <a href="#tramites">Trámites</a>.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/mapa.jpg" alt="Vista de Terrenos en La Paz" class="img-fluid rounded" style="width: 500px; height: 500px;">
                </div>
            </div>
            <br>
            <div class="mt-4">
                <h3>Noticias Recientes</h3>
                <p>Manténgase al tanto de las últimas actualizaciones y cambios en las regulaciones de registro de terrenos. Visite nuestra sección de <a href="#noticias">Noticias</a> para más información.</p>
                <ul>
                    <li><strong>Nuevo Sistema de Registro Electrónico:</strong> Anunciamos el lanzamiento de nuestro nuevo sistema en línea para el registro de terrenos, que simplificará el proceso para los ciudadanos.</li>
                    <li><strong>Próximo Taller sobre Derechos de Propiedad:</strong> Únase a nosotros el próximo 15 de octubre para un taller informativo sobre los derechos de propiedad y el proceso de registro.</li>
                    <li><strong>Actualización de Tarifas de Registro:</strong> A partir del 1 de noviembre, habrá un ajuste en las tarifas de registro. Consulte nuestra sección de tarifas para más detalles.</li>
                </ul>
            </div>
            <div class="mt-4">
                <h3>Participación Ciudadana</h3>
                <p>Fomentamos la participación de los ciudadanos en la gestión de la ciudad. Únase a nuestros eventos y talleres para estar informado y contribuir a la mejora de nuestra comunidad.</p>
                <p>Estamos organizando foros comunitarios donde los ciudadanos pueden expresar sus preocupaciones y sugerencias sobre el desarrollo urbano y la planificación territorial. Para más información sobre los próximos eventos, visite nuestra sección de <a href="#eventos">Eventos</a>.</p>
                <center>
                    <img src="img/participacion.jpg" alt="Participación Ciudadana" class="img-fluid rounded mt-3" style="width: 500px;">
                </center>
                
            </div>
            <div class="mt-4">
                <h3>Derechos de Propiedad</h3>
                <p>Los derechos de propiedad son fundamentales para el desarrollo de una comunidad próspera. Cada propietario tiene derechos específicos sobre su terreno y su uso. Estos derechos están protegidos por la ley y garantizan que los ciudadanos puedan disfrutar de su propiedad sin interferencias indebidas.</p>
                <p>Es esencial que los dueños de propiedades estén informados sobre sus derechos y las responsabilidades que conllevan. Por ello, ofrecemos sesiones informativas y recursos accesibles para ayudar a los ciudadanos a entender mejor sus derechos de propiedad.</p>
                <center>
                <img src="img/propiedad.jpg" alt="Derechos de Propiedad" class="img-fluid rounded mt-3" style="width: 500px;">
                </center>
            </div>
            <div class="mt-4">
                <h3>Preguntas Frecuentes</h3>
                <p>¿Tiene preguntas sobre el registro de terrenos? Aquí hay algunas de las más comunes:</p>
                <ul>
                    <li><strong>¿Cuáles son los requisitos para registrar un terreno?</strong> Debe presentar documentos de propiedad, identificación oficial y pagar la tarifa correspondiente.</li>
                    <li><strong>¿Cuánto tiempo toma el proceso de registro?</strong> El proceso puede demorar entre 2 a 4 semanas, dependiendo de la complejidad del caso.</li>
                    <li><strong>¿Puedo realizar el registro en línea?</strong> Sí, hemos implementado un sistema de registro electrónico para facilitar el proceso.</li>
                </ul>
                <p>Para más preguntas, consulte nuestra sección de <a href="#faq">Preguntas Frecuentes</a>.</p>
            </div>
        </section>



        <section id="tramites" class="mt-5">
            <h2 class="mb-4 text-center">Trámites</h2>
            <div class="accordion" id="accordionTramites">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            TRAMITES
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionTramites">
                        <div class="accordion-body d-flex justify-content-between align-items-center">
                            <p>GUÍA DE LLENADO PARA LA FICHA CATASTRAL A,B y C</p>
                            <a href="pdf/ficha_catastral.pdf" class="btn btn-primary" target="_blank">Ver PDF</a>
                        </div>
                        <div class="accordion-body d-flex justify-content-between align-items-center">
                            <p>GUÍA DE LLENADO PARA LA FICHA CATASTRAL PROPIEDAD HORIZONTAL MATRIZ</p>
                            <a href="pdf/ficha_catastral_propiedadhorizontalmatriz.pdf" class="btn btn-primary" target="_blank">Ver PDF</a>
                        </div>
                        <div class="accordion-body d-flex justify-content-between align-items-center">
                            <p>GUÍA DE LLENADO PARA LA FICHA CATASTRAL PROPIEDAD UNIFAMILIAR</p>
                            <a href="pdf/ficha_catastral_unicatastral.pdf" class="btn btn-primary" target="_blank">Ver PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="normativa" class="mt-5">
            <h2 class="mb-4 text-center">Normativas</h2>
            <div class="accordion" id="accordionNormativa">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNormativaOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNormativaOne" aria-expanded="true" aria-controls="collapseNormativaOne">
                            Normativa de Registro de Propiedades
                        </button>
                    </h2>
                    <div id="collapseNormativaOne" class="accordion-collapse collapse show" aria-labelledby="headingNormativaOne" data-bs-parent="#accordionNormativa">
                        <div class="accordion-body">
                            <p>Esta normativa establece los procedimientos y requisitos necesarios para el registro de propiedades en nuestra municipalidad. Es fundamental para garantizar la legalidad de la tenencia de tierras y asegurar que los derechos de los propietarios sean respetados.</p>
                            <p>Entre los principales aspectos que se regulan se incluyen la presentación de documentos, la verificación de la identidad del solicitante y la comprobación de la situación legal del terreno. Además, se establece un protocolo para la resolución de disputas en caso de que existan reclamaciones sobre la propiedad.</p>
                            <p>Es esencial que todos los propietarios de terrenos cumplan con esta normativa para evitar futuros inconvenientes legales y asegurar la protección de su inversión.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNormativaTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNormativaTwo" aria-expanded="false" aria-controls="collapseNormativaTwo">
                            Normativa sobre Uso de Suelo
                        </button>
                    </h2>
                    <div id="collapseNormativaTwo" class="accordion-collapse collapse" aria-labelledby="headingNormativaTwo" data-bs-parent="#accordionNormativa">
                        <div class="accordion-body">
                            <p>Esta normativa regula el uso del suelo en la municipalidad, asegurando un desarrollo urbano ordenado y sostenible. Se clasifica el uso del suelo en categorías como residencial, comercial, industrial y recreativo, y se establecen restricciones para ciertos terrenos según su ubicación y características.</p>
                            <p>Además, se incluyen directrices para la construcción de infraestructuras y la preservación de espacios verdes, lo que es fundamental para mantener la calidad de vida de los habitantes. La normativa busca equilibrar el desarrollo económico con la protección del medio ambiente, promoviendo un uso responsable y sostenible de los recursos.</p>
                            <p>Es vital que todos los desarrolladores y propietarios de terrenos consulten esta normativa antes de iniciar cualquier proyecto para asegurarse de que cumplan con las regulaciones vigentes.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNormativaThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNormativaThree" aria-expanded="false" aria-controls="collapseNormativaThree">
                            Normativa de Zonificación
                        </button>
                    </h2>
                    <div id="collapseNormativaThree" class="accordion-collapse collapse" aria-labelledby="headingNormativaThree" data-bs-parent="#accordionNormativa">
                        <div class="accordion-body">
                            <p>La normativa de zonificación establece las áreas de desarrollo comercial, residencial e industrial dentro del municipio. Su propósito es facilitar un crecimiento equilibrado y organizado, evitando la superposición de usos que podrían causar conflictos entre diferentes actividades.</p>
                            <p>La zonificación se basa en estudios de impacto ambiental y necesidades de infraestructura, asegurando que cada zona tenga los servicios necesarios para su desarrollo. También se contemplan medidas para proteger áreas sensibles, como reservas naturales y zonas históricas, asegurando que el patrimonio cultural y ambiental se conserve para futuras generaciones.</p>
                            <p>Los propietarios y desarrolladores deben estar al tanto de las regulaciones específicas de cada zona y obtener los permisos necesarios antes de realizar cualquier construcción o modificación en sus propiedades.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNormativaFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNormativaFour" aria-expanded="false" aria-controls="collapseNormativaFour">
                            Normativa de Conservación del Patrimonio
                        </button>
                    </h2>
                    <div id="collapseNormativaFour" class="accordion-collapse collapse" aria-labelledby="headingNormativaFour" data-bs-parent="#accordionNormativa">
                        <div class="accordion-body">
                            <p>Esta normativa tiene como objetivo preservar los bienes patrimoniales del municipio, asegurando que las propiedades de valor histórico y cultural sean protegidas y mantenidas adecuadamente. Se establecen criterios específicos para la restauración y conservación de edificios históricos, así como para el uso de materiales y técnicas que respeten la integridad del patrimonio.</p>
                            <p>Los propietarios de inmuebles catalogados deben seguir un proceso de aprobación antes de realizar cualquier modificación o intervención en sus propiedades. Esto incluye la presentación de un plan de trabajo que detalle cómo se preservará el valor histórico del inmueble durante la rehabilitación.</p>
                            <p>La normativa también promueve la educación y sensibilización sobre la importancia de conservar el patrimonio cultural, fomentando la participación de la comunidad en actividades relacionadas con la preservación de la historia local.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="contacto" class="mt-5">
            <h2 class="mb-4 text-center">Contacto</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">
                            Nombre
                            </label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">
                            Correo electrónico
                            </label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">
                            Mensaje
                            </label>
                            <textarea class="form-control" id="mensaje" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">
                        Información de contacto
                    </h3>
                    <p><strong>Dirección:</strong> Calle Principal #123, La Paz, Bolivia</p>
                    <p><strong>Teléfono:</strong> (591) 2-1234567</p>
                    <p><strong>Email:</strong> <a href="mailto:info@hamlp.gob.bo">info@hamlp.gob.bo</a></p>
                    <h4 class="mt-4">Horario de atención</h4>
                    <p>Lunes a Viernes: 08:00 - 17:00</p>
                    <p>Sábados: 09:00 - 13:00</p>
                    <h4 class="mt-4">Síguenos en redes sociales</h4>
                    <p>
                        <a href="#" class="btn btn-outline-primary btn-sm me-2">Facebook</a>
                        <a href="#" class="btn btn-outline-info btn-sm">Twitter</a>
                    </p>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p>&copy; 
            2024 Honorable Alcaldía Municipal de La Paz. Todos los derechos reservados.
            </p>
            <p>
                <a href="#" class="text-white me-3">
                    Política de privacidad
                </a> 
                <a href="#" class="text-white ms-3">
                    Términos y condiciones
                </a>
            </p>
            <div class="mt-3">
                <a href="#" class="text-white me-3" title="Facebook">
                    <i class="fab fa-facebook-square fa-lg"></i>
                </a>
                <a href="#" class="text-white me-3" title="Twitter">
                    <i class="fab fa-twitter-square fa-lg"></i>
                </a>
                <a href="#" class="text-white" title="Instagram">
                    <i class="fab fa-instagram-square fa-lg"></i>
                </a>
            </div>
        </div>
    </footer>

    <!--VENTANA DEL LOGIN-->

    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header bg-primary border-bottom-0 pb-0">
                    <h4 class="modal-title w-100 text-center fw-bold text-dark mb-3" id="loginModalLabel">Iniciar Sesión</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5 pt-0">
                    <!-- SI es que tiene error de datosL -->
                    <?php if (isset($_GET['error']) && $_GET['error'] === 'invalid_credentials'): ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Datos incorrectos. Por favor, inténtelo de nuevo.
                        </div>
                    <?php endif; ?>
                    <!-- Mandamos el formulario a validar -->
                    <form class="mt-4" action="BDEdwin_ValidarLogin.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="username" name="username" placeholder="Usuario" required>
                            <label for="username">Usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="password" name="password" placeholder="Contraseña" required>
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Recordarme
                                </label>
                            </div>
                            <a href="#" class="text-primary">¿Olvidaste tu contraseña?</a>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Ingresar</button>
                        <div class="text-center mt-3">
                            <p class="mb-0">¿No tienes una cuenta? <a href="#" class="text-primary">Regístrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- llamado a mi archivo bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>