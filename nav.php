<!DOCTYPE html>
<html>
<?php
if(isset($_SESSION['id_u']) && $_SESSION['lvl'] ==1){
    ?>
    <header>
        <div class="container">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="accueil">Accueil</a></li>
                    <li><a href="agenda">Agenda</a></li>
                    <li><a href="galerie">Galerie</a></li>
                    <li><a href="reception">Message</a></li>
                    <li><a href="logout">Deconnexion</a></li>

                </ul>
            </nav>
        </div>
    </header>
<?php }
elseif (isset($_SESSION['id_u']) && $_SESSION['lvl'] ==2) {
    ?>
    <header>
        <div class="container">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="accueil">Accueil</a></li>
                    <li><a href="agenda-admin">Agenda</a></li>
                    <li><a href="reception">Message</a></li>
                    <li><a href="logout">Deconnexion</a></li>
                </ul>
            </nav>
        </div>
    </header>
<?php }
elseif (isset($_SESSION['id_u']) && $_SESSION['lvl'] ==3) {
    ?>
    <header>
        <div class="container">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="accueil">Accueil</a></li>
                    <li><a href="admin">Liste</a></li>
                    <li><a href="logout">Deconnexion</a></li>
                </ul>
            </nav>
        </div>
    </header>
<?php } else { ?>
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a href="accueil">Accueil</a></li>
            <li><a href="login.php">Connexion</a></li>
            <li><a href="register.php">S'inscrire</a></li>
            <li><a href="galerie">Galerie</a></li>

        </ul>
    </nav>
<?php } ?>


<body>

<!--?= $content; ?>

?php include("./assets/includes/script.js") ?>-->

<script type="text/javascript">
    jQuery(function($){
        $('a.zoombox').zoombox();

    });
</script>

</body>
</html>