<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contactez-Nous</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="single-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li><a href="index.php">Accueil</a></li>
                                <li  class="current-menu-item"><a href="contact.php">Contactez-Nous</a></li>
                                <?php
                                if (isset($_SESSION['unserId'])) {
                                    echo "<li><a href='profil_patient.php'> Bonjour, ".$_SESSION['unserLastname']."</a></li>";
                                }else{
                                    echo "<li><a href='login.php'>Se Connecter</a></li>";
                                }
                                ?>
                                <?php
                                if (isset($_SESSION['unserId'])) {
                                    echo '<form action="includes/logout.inc.php" method = "post">
                                    <button class="call-btn" type="submit" name="logout-submit" > Deconnexion</button>
                                </form>';
                                }else{
                                    echo "<li class='call-btn button gradient-bg mt-3 mt-md-0'>
                                    <a name='logout-submit' type='submit' class='d-flex justify-content-center align-items-center' href='#'><img src='images/emergency-call.png'> +212 527 778 8892</a>
                                </li>";
                                }
                                ?>
  
                            </ul>
                             
                        </nav>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contactez-Nous</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Accueil</a></li>
                            <li>Contactez-Nous</li>
                        </ul>
                    </div><!-- .breadcrumbs -->

                </div>
            </div>
        </div>

        <img class="header-img" src="images/contact-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="contact-info h-100">
                        <h2 class="d-flex align-items-center">Contact Info</h2>

                        <ul class="p-0 m-0">
                            <li><span>Addtress:</span>Avenue Mohamed Ben Abdellah Regragui, Rabat</li>
                            <li><span>Phone:</span>+212 527 778 8892</li>
                            <li><span>Email:</span>yourmail@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="opening-hours h-100">
                        <h2 class="d-flex align-items-center">Heures d'Ouverture</h2>

                        <ul class="p-0 m-0">
                            <li>Lundi - Jeudi <span>8.00 - 19.00</span></li>
                            <li>Vendredi <span>8.00 - 18.30</span></li>
                            <li>Samedi <span>9.30 - 17.00</span></li>
                            <li>Dimanche <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="emergency-box h-100">
                        <h2 class="d-flex align-items-center">Urgence</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                        </div>
                        <p>Nos services d'Urgences sont disponibles 24/7, en cas d'urgence veuillez appelez le numéro ci-dessus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-page-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13233.2802575332!2d-6.8676019!3d33.9843118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e9c39cfa1d9e8d7!2s%C3%89cole%20Nationale%20Sup%C3%A9rieure%20d&#39;Informatique%20et%20d&#39;Analyse%20des%20Syst%C3%A8mes!5e0!3m2!1sfr!2sma!4v1587816897709!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="images/logo.png" alt=""></a></h2>
                            <p class="copyright">Copyright © All rights reserved </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contactez-Nous</h2>

                            <ul class="p-0 m-0">
                                <li><span>Addtress:</span>Avenue Mohamed Ben Abdellah Regragui, Rabat</li>
                                <li><span>Phone:</span>+212 527 778 8892</li>
                                <li><span>Email:</span>yourmail@gmail.com</li>
                            </ul>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Liens</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="contact.php">Contactez-Nous</a></li>
                                <li><a href="login.php">Se Connecter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>