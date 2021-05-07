<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Auto-Ecole</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/conduite_a.png" rel="icon">
    <link href="assets/img/conduite_a.png" rel="apple-touch-icon">

    <?php include("./assets/includes/index_css.php") ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div id="logo">
            <a href="index.php"><img src="assets/img/logogo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="index.php">Regna</a></h1>-->
        </div>
        <?php include("nav.php") ?>
    </div>
</header><!-- End Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Connexion</h3>
                <p class="section-description">TMTC coco toi</p>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" placeholder="Votre Nom" id="nom" name="nom" class="form-control" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" placeholder="Votre Prenom" id="prenom" name="prenom" class="form-control" value="<?php if(isset($username)) { echo $username; } ?>" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" placeholder="Numéro de Téléphone" id="tel" name="tel" class="form-control" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" placeholder="Votre email" id="email" name="email" class="form-control" value="<?php if(isset($email)) { echo $email; } ?>" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" placeholder="Confirmez votre email" id="email2" name="email2" class="form-control" value="<?php if(isset($email2)) { echo $email2; } ?>" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" class="form-control" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" placeholder="Confirmez votre pass" id="mdp2" name="mdp2" class="form-control" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" placeholder="ex : rue jean moulin" id="adresse" name="adresse" class="form-control" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" placeholder="ex : 75020" id="cp" name="cp" class="form-control" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="forminscription" value="Je m'inscris" class="box-button" align="center" />
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                        <?php
                        if(isset($erreur)) {
                            echo '<font color="red" align="center">'.$erreur."</font>";
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
        <body>
        <div class="row d-flex justify-content-center">
        </body>
</html>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Regna</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>