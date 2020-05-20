<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>profil</title>

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
                            <img class="img-profile img-circle img-responsive center-block" src="https://weesho.org/wp-content/uploads/2014/04/avatar-inconnu-2.jpg" alt="">

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
                        <li class="active"><a href="voir_ordonnance.php"><span class="fa fa-credit-card"></span> Historique patient</a></li>
                        <li><a href="index.php"><span class="fa fa-credit-card"></span> Accueil</a></li>
                    </ul>
                    </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Historique patient <span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title"> Ici vous trouvez l'historique de toutes les rendez-vous que vous avez pris et les visites que vous avez fait aucien de notre cabinet !</h3>
                            <div class="form-group avatar">
                                
                           


                        <table>
  <tr>
    <th>rendez-vous</th>
    <th>Date</th>
    <th>Heure</th>
    <th>Docteur</th>
    <th> visite faite /annulée</th>
  </tr>
  <tr>
    <td>1</td>
    <td> 05/07/2020</td>
    <td>10:15</td>
    <td>Ahmed Tazi</td>
    <td> fait </td>
  </tr>
  <tr>
    <td>2</td>
    <td> 03/12/2020</td>
    <td>10:15</td>
    <td> zakiya Norri</td>
    <td> non fait </td>
  </tr>
</table>
 

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
<body>
</div> 
</html>
