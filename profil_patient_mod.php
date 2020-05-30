<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>profile - Modification</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_profil.css">
    <script src="js/custom.js"></script>
</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">
<div >
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRj0sVdHUILZRoIEPpZsqFqaxKUU1KPE45kn2LcjB6WmcElCf-C&usqp=CAU" class="rounded-circle" alt="Avatar" style="width:150px">
                        <ul class="meta list list-unstyled">
                        <ul class="meta list list-unstyled">
                        <?php
                            if (isset($_SESSION['unserId'])) {
                                echo '<li class="name">'.$_SESSION['unserLastname'].' '. $_SESSION['unserFirstname'].'</li>';
                            }
                        ?>
                        </ul>
                    </div>
                <nav class="side-menu">
                <ul class="nav">
                  <li class="active"><a href="profil_patient.php"><span class="fa fa-user"></span> Modifier votre profile</a></li> 
                  <li><a href="avoir_rdv.php"><span class="fa fa-clock-o"></span> Avoir rendez-vous</a></li>
                  <li><a href="historique_patient.php"><span class="fas fa-history"></span> Mon Historique</a></li>
                  <li><a href="index.php"><span class="fas fa-house-user"></span> Accueil</a></li>
                </ul>
                <form class="form-horizontal" action="includes/logout.inc.php" method = "post">
                      <button class="btn btn-primary" style="margin-left: 14%; margin-top: 10%;"><span class="fa fa-user"></span> Déconnexion</button>
                </form>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Modifier votre profile (touts les champs sont obligatoires.)<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal" action="includes/profile_mod.inc.php" method = "post">
                        <fieldset class="fieldset">
                        <?php
                            if (isset($_SESSION['unserId'])) {
                                echo "<h3>".$_SESSION['unserLastname']." ". $_SESSION['unserFirstname']."</h3>";
                                echo "</fieldset><hr>";
                                echo "<h5>Emai : ".$_SESSION['unserEmail']. "  </h5><input type='text'  placeholder='Nouvelle adresse email...' class='form-control' name='email'> <br>";
                                echo "<h5>Date de naissance : ".$_SESSION['unserBirth']. "  </h5><input type='text'  placeholder='Date de naissance...' class='form-control' name='datenaissance'><br>";
                                echo "<h5>Genre : ".$_SESSION['unserGender']. " </h5><div class='form-group'>
                                <select  class='form-control'  name='genre'>
                                    <option value='Homme'>Homme</option>
                                    <option value='Femme'>Femme</option>
                                </select>
                            </div><br>";
                                if ($_SESSION['unserTel'] !== 0) {
                                    echo "<h5>Tel : ".$_SESSION['unserTel']. " </h5><input type='text'  placeholder='Votre nouveau numéro...' class='form-control' name='tel'><br>";
                                }else{
                                    echo "<h5>Tel : </h5><input type='number'  placeholder='Votre nouveau numéro...' class='form-control' name='tel'><br>";
                                }
                                if ($_SESSION['unserS']) {
                                    echo "<h5>Groupe Sangin : ".$_SESSION['unserS']. " </h5><input type='text'  placeholder='Votre Group Sangin si connue...' class='form-control' name='GroupS'><br>";
                                }else{
                                    echo '<h5>Groupe Sangin : </h5><input type="text"  placeholder="Votre Group Sangin si connu..." class="form-control" name= "GroupS"> <br>';
                                }
                               
                                echo '<button type="submit" name="profile-mod-submit" class="btn btn-primary">Enregistrer les modification</button>';
                                
                            }else{
                                die("Erreur: Vous n'etes pas connecté.");
                            }
                            
                        ?>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<body>
</div> 
</html>
