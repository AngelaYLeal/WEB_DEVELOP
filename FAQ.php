<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>FAQ</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Mi CCS personalizado -->
    <link href="css/custom.css" rel="stylesheet" />

</head>
    <body class="d-flex flex-column min-vh-100">
    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <div class="container faq-container px-4">
        <h1 class="text-center mb-5 fw-bold">Preguntas Frecuentes (FAQ)</h1>

        <div class="accordion" id="accordionFAQ">

            <!-- Pregunta 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        ¿Qué es Cybernetik Einherjar?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        Es un videojuego de género <strong>Metroidvania</strong> con estética cyberpunk desarrollado por estudiantes de la URJC. Combina exploración no lineal, combate rítmico y una narrativa profunda sobre la evolución tecnológica.
                    </div>
                </div>
            </div>

            <!-- Pregunta 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿En qué plataformas estará disponible?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        Inicialmente estamos desarrollando el juego para <strong>PC (Windows)</strong>. Dependiendo del apoyo recibido, estudiaremos versiones para consolas en el futuro.
                    </div>
                </div>
            </div>

            <!-- Pregunta 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Cómo puedo ayudar al proyecto?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        ¡Puedes apoyarnos pulsando el botón de ayuda en nuestra página principal! Además, compartir el proyecto en redes sociales nos ayuda enormemente a ganar visibilidad.
                    </div>
                </div>
            </div>

            <!-- Pregunta 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Quiénes forman el equipo de desarrollo?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        Somos un equipo de 7 estudiantes de la URJC: Aitor, Aray, Angela, Luis, Jacob, Jiale y Favio; cada uno especializado en diferentes áreas como programación, arte y diseño narrativo.
                    </div>
                </div>
            </div>

        </div>
    </div>






    <!-- Footer-->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
</html>

