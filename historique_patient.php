<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mon Historique</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_profil.css">
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
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">  
<div >
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
                        <li ><a href="profil_patient.php"><span class="fa fa-user"></span> Profile</a></li> 
                        <li><a href="avoir_rdv.php"><span class="fa fa-clock-o"></span> Avoir rendez-vous</a></li>
                        <li class="active"><a href="historique_patient.php"><span class="fas fa-history"></span>Mon Historique</a></li>
                        <li><a href="index.php"><span class="fas fa-house-user"></span> Accueil</a></li>
                    </ul>
                    <form class="form-horizontal" action="includes/logout.inc.php" method = "post">
                      <button class="btn btn-primary" style="margin-left: 14%; margin-top: 10%;"><span class="fa fa-user"></span> Déconnexion</button>
                    </form>
                    </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Historique patient <span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title"> Ici vous trouvez l'historique de toutes les rendez-vous que vous avez pris et les visites que vous avez fait aucien de notre cabinet, ainsi que votre ordonnance !</h3>
                            <div class="form-group avatar" style='width: 1000px;'>
     

                            <?php
                                require 'includes/dbh.inc.php';
                                echo "<table>
                                          <tr>
                                            <th>rendez-vous</th>
                                            <th>Date et heure</th>
                                            <th>Docteur</th>
                                            <th> remarque du médecin</th>
                                            <th> ordonnace </th>
                                          </tr>
                                          <tr>";
                                $i = 1;
                                $remarque = "";
                                $sql = "SELECT * FROM `Rendez-vous` WHERE idp=".$_SESSION['unserId'];
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result)) {
                                  while($row = mysqli_fetch_assoc($result)) {#la table rendez-vous
                                      $idr = $row['id'];
                                      $dater = $row['Dateti'];
                                      $etat = $row['etat'];
                                      $sql2 = "SELECT * FROM `Médecin` WHERE id=".$row["idm"];
                                      $result_m = mysqli_query($conn, $sql2);
                                      if (mysqli_num_rows($result_m)){
                                      $row_m = mysqli_fetch_assoc($result_m);
                                      $nomM = $row_m['Nom'];
                                      $preM = $row_m['Prénom'];
                                      $sql3 = "SELECT * FROM `Ordonnance` WHERE idr=".$idr;
                                      $result_o = mysqli_query($conn, $sql3);
                                      if (mysqli_num_rows($result_o)){
                                        $row_o = mysqli_fetch_assoc($result_o);
                                        $med1 = $row_o['Medicament1'];
                                        $med2 = $row_o['Medicament2'];
                                        $med3 = $row_o['Medicament3'];
                                        $nfj1 = $row_o['nfj1'];
                                        $nfj2 = $row_o['nfj2'];
                                        $nfj3 = $row_o['nfj3'];
                                        $avap1 = $row_o['avap1'];
                                        $avap2 = $row_o['avap2'];
                                        $avap3 = $row_o['avap3'];
                                        $remarque = $row_o['remarque'];
                                        if ($etat == 1 || $remarque !== "") {
                                          
                                          echo "<td>".$i."</td>";
                                          echo "<td style='width: 30%;'>".$dater."</td>";
                                          echo "<td>". $preM." ". $nomM."</td>";
                                          echo "<td style='width: 30%;'>".$remarque."</td>";
                                          echo '<td style="width: 40%;"> <a type="button" class="collapsible">ordonnace</a>
                                          <div class="content">';
                                          echo '<ol><li>' .$med1. "  "."<br>". $nfj1 ." fois par jour<br>".$avap1.'</li>';
                                          echo '<li>'.$med2. "  " ."<br>". $nfj2 ." fois par jour<br>".$avap2.'</li>';
                                          echo '<li>'.$med3. "  " ."<br>". $nfj3 ." fois par jour<br>".$avap3.'</li>';
                                          echo '</ol></tr>';
                                          $i += 1;
                                        }elseif($etat == 2 || $etat == 0){
                                          echo "<h2> Pas d'historique</h2>";
                                        }
                                        
                                      }
                                      
                                        
                                      }
                                  }
                                }
                                ?>
                                
                            </table>
            </fieldset>
            <hr>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


<body>
</div> 
</html>
