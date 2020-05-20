<?php
session_start();
require 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste des rendez-vous</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_profil.css">
    <script src="js/custom.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 9px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


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
                  <li><a href="profil_medecin.php"><span class="fa fa-user"></span> Profile</a></li> 
                  <li class="active"><a href="voir_liste_RDV.html"><span class="fa fa-clock-o"></span> Voir la liste des rendez-vous</a>
                  </li>
                  <li><a href="ajouter_ordonnance.php"><span class="fa fa-credit-card"></span> Ajouter une Ordonnance</a></li>
                  
                </ul>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Liste des rendez-vous<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal" action="includes/logout.inc.php" method = "post">
                    <button class="btn btn-primary" style="margin-left: 700px; margin-bottom:20px;">Deconnexion</button>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Ci dessus la liste des rendez-vous :</h3>
                            <div class="form-group avatar">




                          <table>
                          <tr>
                          <?php
                          $idm = $_SESSION['DId'];
                          $sql = "SELECT * FROM Rendez-vous WHERE idm=?;";
                          $statment = mysqli_stmt_init($conn);
                          if (!mysqli_stmt_prepare($statment, $sql)){//cheking if our connection to the databse doesn't work
                              header("Location: ../profil_medecin.php?error=sqlerror1");
                          exit();
                          }
                          else {
                              mysqli_stmt_bind_param($statment, "i", $idm);
                              mysqli_stmt_execute($statment);
                              $result = mysqli_stmt_get_result($statment);
                              if ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $date = $row['Date'];
                                $time = $row['Time'];
                              }
                                $sql1 = "SELECT * FROM Patient WHERE id=$id;";
                                $statment1 = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($statment, $sql)){//cheking if our connection to the databse doesn't work
                                  header("Location: ../login.php?error=sqlerror1");
                                exit();
                                }
                                else {
                                    mysqli_stmt_bind_param($statment1, "i", $idm);
                                    mysqli_stmt_execute($statment1);
                                    $result1 = mysqli_stmt_get_result($statment1);
                                    if ($table = mysqli_fetch_assoc($result1)) {
                                      $lastName = table['Nom'];
                                      $firstName = table['Prénom'];
                                    }

                                 }
                          }
                            echo"<th>Nom du patient</th>";
                            echo"<th>Date</th>";
                            echo"<th>Heure</th>";
                            ?>
                          </tr>
                        
                          </table>


                          </table>





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