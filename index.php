<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cybernetik Einherjar</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Mi CCS personalizado -->
        <link href="css/custom.css" rel="stylesheet" />

    </head>
    <body class = "d-flex flex-column min-vh-100"  id="body">

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->

            <!--reloj de cuenta atrás-->
            <div class="countdown-section mb-4 text-center">
                <h4 class="text-uppercase fw-bold" id="clock-tittle">Sincronización final en:</h4>

                <div id="countdown" class="d-flex justify-content-center gap-3">
                    <div class="time-node">
                        <span id="days" class="display-6 fw-bold">00</span>
                        <div class="small">Días</div>
                    </div>

                    <span class="separator display-6 text-uppercase fw-bold mb-2 text-center">:</span>

                    <div class="time-node">
                        <span id="hours" class="display-6 fw-bold">00</span>
                        <div class="small">Horas</div>
                    </div>

                    <span class="separator display-6 text-uppercase fw-bold mb-2 text-center">:</span>

                    <div class="time-node">
                        <span id="minutes" class="display-6 fw-bold">00</span>
                        <div class="small">Min</div>
                    </div>

                    <span class="separator display-6 text-uppercase fw-bold mb-2 text-center">:</span>

                    <div class="time-node">
                        <span id="seconds" class="display-6 fw-bold">00</span>
                        <div class="small">Seg</div>
                    </div>
                </div>
            </div>


            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <!-- VIDEO PROMOCIONAL-->
                <div class="col-lg-7">
                    <div class="neon-wrapper mb-4 mb-lg-0">
                        <video class="w-100 rounded mb-4 mb-lg-0"
                               controls
                               preload="metadata"
                               poster="assets/640x360image.jpg">

                            <source src="assets/videoprueba.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">¡Hackea tu paso a la salida! </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum lacus, pellentesque sed viverra sit amet, luctus a dui. Nam enim nibh, luctus quis urna vitae, dictum tempus metus. Etiam tincidunt eu ligula a feugiat. Ut luctus nisl sed justo malesuada, in tincidunt nunc rutrum. Nulla semper sed ante vitae rhoncus.</p>

                    <!-- BARRA DE PROGRESO AQUÍ -->
                    <div class="progress-bg">
                        <div id="progress-bar" class ="text-center"> road to 100€</div>
                    </div>

                    <!-- boton de donación-->
                    <div class="text-end">
                        <a class="btn btn-primary" href="#!" onclick="increaseFill()">¡Quiero ayudar!</a>
                    </div>


                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">¡Lucha, explora y evoluciona: apoya Cybernetik Einherjar!</p></div>
            </div>

            <!-- SECCIÓN DE CONTENIDO DEL JEUGO -->
            <div class="row gx-4 gx-lg-5 my-5">

                <!-- LADO IZQUIERDO: ÍNDICE (1/4) -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div id="sticky-index" class="list-group sticky-top" style="top: 20px;">
                        <a class="list-group-item list-group-item-action active" href="#historia">Historia</a>
                        <a class="list-group-item list-group-item-action" href="#mecanicas">Mecánicas de Juego</a>
                        <a class="list-group-item list-group-item-action" href="#recompensas">Recompensas</a>
                        <a class="list-group-item list-group-item-action" href="#equipo">El Equipo</a>
                    </div>
                </div>

                <!-- LADO DERECHO: TEXTO (3/4) -->
                <div class="col-lg-9">
                    <div data-bs-spy="scroll" data-bs-target="#sticky-index" data-bs-offset="0" class="scrollspy-example" tabindex="0">

                        <section id="historia" class="mb-5">
                            <h2 class="fw-bold">Historia</h2>
                            <p>En el año 2099, los Einherjar han despertado... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut luctus nisl sed justo malesuada, in tincidunt nunc rutrum.</p>
                        </section>

                        <section id="mecanicas" class="mb-5">
                            <h2 class="fw-bold">Mecánicas de Juego</h2>
                            <p>Combate rítmico y hackeo en tiempo real. Nam enim nibh, luctus quis urna vitae, dictum tempus metus. Etiam tincidunt eu ligula a feugiat.</p>
                        </section>

                        <section id="recompensas" class="mb-5">
                            <h2 class="fw-bold">Recompensas</h2>
                            <p>Desde acceso anticipado hasta skins exclusivas. Nulla semper sed ante vitae rhoncus. Sed ipsum lacus, pellentesque sed viverra sit amet.</p>
                        </section>

                        <section id="equipo" class="mb-5">
                            <h2 class="fw-bold">El Equipo</h2>
                            <p>Un grupo de desarrolladores apasionados por el cyberpunk. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </section>

                    </div>
                </div>
            </div>

            <!-- Comentarios de DISQUS -->

            <div class="container px-4 px-lg-5 my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div id="disqus_thread"></div>
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

    <!-- Mi JS-->
        <script src="js/barra_de_progreso.js"></script>
        <script src="js/clock_counter.js"></script>

    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT
         *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR
         *  PLATFORM OR CMS.
         *
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT:
         *  https://disqus.com/admin/universalcode/#configuration-variables
         */
        /*
        var disqus_config = function () {
            // Replace PAGE_URL with your page's canonical URL variable
            this.page.url = PAGE_URL;

            // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            this.page.identifier = PAGE_IDENTIFIER;
        };
        */
        var disqus_config = function () {
            this.page.url = "https://cybernetikeinhearjar.disqus.com/demo";
            this.page.identifier = "pagina-demo";
        };

        (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
            var d = document, s = d.createElement('script');

            // IMPORTANT: Replace EXAMPLE with your forum shortname!
            s.src = 'https://cybernetikeinhearjar.disqus.com/embed.js';

            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
        </script>
    <noscript>
        Please enable JavaScript to view the
        <a href="https://disqus.com/?ref_noscript" rel="nofollow">
            comments powered by Disqus.
        </a>
    </noscript>
    </body>
</html>
