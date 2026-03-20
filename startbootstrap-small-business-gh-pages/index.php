
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cybernetik Einhearjar</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class = "d-flex flex-column min-vh-100" >

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7">
                    <video class="w-100 rounded mb-4 mb-lg-0"
                           controls
                           preload="metadata"
                           poster="assets/640x360image.jpg">

                        <source src="assets/videoprueba.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">¡Hackea tu paso a la salida! </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum lacus, pellentesque sed viverra sit amet, luctus a dui. Nam enim nibh, luctus quis urna vitae, dictum tempus metus. Etiam tincidunt eu ligula a feugiat. Ut luctus nisl sed justo malesuada, in tincidunt nunc rutrum. Nulla semper sed ante vitae rhoncus.</p>
                    <a class="btn btn-primary" href="#!">¡Quiero ayudar!</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">¡Lucha, explora y evoluciona: apoya Cybernetik Einherjar!</p></div>
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

    re
    </body>
</html>
