<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mon profil</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
    
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_profil.css">
    <script src="js/custom.js"></script>
    <script src="js/index.js"></script>




</head>
<body>  
<div style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">

                        <ul class="meta list list-unstyled">
                        <?php
                        if ($_SESSION['DLastname']) {
                          echo '<li class="name">'.$_SESSION['DLastname'].' '. $_SESSION['DFirstname'].'</li>';
                        }else{
                          die("Erreur: Vous n'etes pas connecté.");
                        }
                        ?>   
                        </ul>
                        
                    </div>
                <nav class="side-menu">
                <ul class="nav">
                  <li class="active"><a href="profil_medecine.php"><span class="fa fa-user"></span> Profile</a></li> 
                  <li><a href="voir_liste_RDV.php"><span class="fa fa-clock-o"></span> Voir la liste des rendez-vous</a>
                  </li>
                  <li><a href="ajouter_ordonnance.php"><span class="fa fa-credit-card"></span> Ajouter une Ordonnance</a></li>
                  
                </ul>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Profile<span class="pro-label label label-warning"></span></h2>
                    
                    <form class="form-horizontal" action="includes/logout.inc.php" method = "post">
                    <button class="btn btn-primary" style="margin-left: 700px; margin-bottom:20px;">Deconnexion</button>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">infos personnelles</h3>
                            <div class="form-group avatar">
                            <div class="w3-container">
                            <ul class="w3-ul w3-card-4">
                              <li class="w3-bar">
                              
                                <div class="w3-bar-item">
                                <span class="w3-large">Nom</span><br>
                                <?php
                                if ($_SESSION['DLastname']) {
                                  echo'<span>' .$_SESSION['DLastname'].' '. $_SESSION['DFirstname']. '</span>';
                                }
                                ?>
                                </div>
                              </li>

                              <li class="w3-bar">
                                <div class="w3-bar-item">
                                
                                  <span class="w3-large">Spécialité</span><br>
                                  <?php
                                if ($_SESSION['Dspecialite']) {
                                  echo'<span class="w3-large">'.$_SESSION['Dspecialite'].'</span>';
                                }
                                  ?>
                                </div>
                              </li>

                              <li class="w3-bar">
                                <div class="w3-bar-item">
                                  <span class="w3-large">Email</span><br>
                                  <?php
                                if ($_SESSION['DEmail']) {
                                  echo'<span>'.$_SESSION['DEmail'].'</span>';
                                }else{
                                  echo'<span> Non spécifié </span>';
                                }
                                  ?>
                                </div>
                              </li>
                              
                                  <li class="w3-bar">
                                <div class="w3-bar-item">
                                  <span class="w3-large">Numéro de téléphone</span><br>
                                  <?php
                                  if ($_SESSION['Dtel'] !== 0){
                                    echo'<span>'.'+212 '.$_SESSION['Dtel'].'</span>';
                                  }else{
                                    echo'<span> Non spécifié </span>';
                                  }
                                  ?>
                                </div>
                              </li>
                              
                            </ul>
                          </div>
                                

                    
                        </fieldset>
                        <hr> 
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<body>
</div> 
</html>