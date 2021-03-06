<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page d'accueil</title>

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

    <script src="js/custom.js"></script>
</head>
<body>
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
                                <li class="current-menu-item"><a href="index.html">Accueil</a></li>
                                <li><a href="contact.php">Contactez-Nous</a></li>
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

        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Le Meilleur <br>Service Medical</h1>
                                    </header>

                                    <div class="entry-content mt-4">
                                        <p>Notre cabinet médical vous offre le meilleur service dans tout le Maroc.</p>
                                    </div>

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                    <?php
                                    if (isset($_SESSION['unserId'])) {
                                        echo "<a class='button gradient-bg' href='profil_patient.php' >Acceder à mon profile</a>";
                                        
                                    }else{
                                        echo "<a class='button gradient-bg' href='signup.php'>S'enregistrer</a>";
                                    }
                                    ?>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="pagination-wrap position-absolute w-100">
                <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
            </div>
        </div>
    </header>

    <div class="homepage-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Heures d'Ouverture</h2>

                        <ul class="p-0 m-0">
                            <li>Lundi - Jeudi <span>8.00 - 19.00</span></li>
                            <li>Vendredi <span>8.00 - 18.30</span></li>
                            <li>Samedi <span>9.30 - 17.00</span></li>
                            <li>Dimanche <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>
                </div>
  
  <img src="https://previews.123rf.com/images/tomwang/tomwang1510/tomwang151000128/46811100-confident-male-and-female-doctors-standing-together.jpg" alt="Simply Easy Learning" width="450"
         height="450">




                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Urgence</h2>

                        <div class="call-btn button gradient-bg">
                            <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +212 527 778 8892</a>
                        </div>

                        <p>Nos services d'Urgences sont disponibles 24/7, en cas d'urgence veuillez appelez le numéro ci-dessus.</p>
                    </div>

            </div>
        </div>
    </div>

    <div class="our-departments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>Nos départements</h2>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/cardiogram.png" alt="">

                                        <h3>Cardioologie</h3>
                                    </header>

                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/stomach-2.png" alt="">

                                        <h3>Gastroentérologie</h3>
                                    </header>

                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/blood-sample-2.png" alt="">

                                        <h3>Laboratoire Médical</h3>
                                    </header>

                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/teeth.png" alt="">

                                        <h3>Soins Dentaires</h3>
                                    </header>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/stretcher.png" alt="">

                                        <h3>chirurgie</h3>
                                    </header>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/scanner.png" alt="">

                                        <h3>Neurologie</h3>
                                    </header>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-md-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/bones.png" alt="">

                                        <h3>Orthopédie</h3>
                                    </header>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-lg-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/blood-donation-2.png" alt="">

                                        <h3>Pediatry</h3>
                                    </header>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/glasses.png" alt="">

                                        <h3>Ophthalmologie</h3>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="contact.html">Contactez-Nous</a></li>
                                <li><a href="login.html">Se Connecter</a></li>
                                 
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

