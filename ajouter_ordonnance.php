<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rendez-vous</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_profil.css">
    <script src="js/custom.js"></script>



</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">  

<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                    	<img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRU_tRT57Pq_fe8VZ0ef9ZdTp8iVqRryxhj3luucZ2EdeHZlDDh&usqp=CAU" class="rounded-circle" width="180" height="200" >
                        <ul class="meta list list-unstyled">
                          <?php
                            echo '<li class="name">'.$_SESSION['DLastname']." " .$_SESSION['DFirstname'].'</li>';
                            echo '<li class="name"> spécialité:' .$_SESSION['Dspecialite'].'</li>';
                            ?>
                        </ul>
                    </div>
                <nav class="side-menu">
                <ul class="nav">
                  
                    <form class="form-horizontal" action="includes/logout.inc.php" method = "post">
                      <button class="btn btn-primary" style="margin-left: 14%; margin-top: 10%;"><span class="fa fa-user"></span> Déconnexion</button>
                    </form>

                  
                </ul>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Liste des rendez-vous<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal" action="includes/ordonnance.inc.php" role="form" method="post">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title" style="font-size:20px ;color:black;">Ici vous trouvez la liste des rendez-vous de vos patients ainsi que leurs informations nécessaires et vous pouvez leurs ajouter une ordonnance</h3>
                            <?php
                            require 'includes/dbh.inc.php';
                            $sql = "SELECT * FROM `Rendez-vous` WHERE idm=".$_SESSION['DId'];
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result)) {
                              while($row = mysqli_fetch_assoc($result)) {
                                $sql2 = "SELECT * FROM `Patient` WHERE id=".$row["idp"];
                                $result_p = mysqli_query($conn, $sql2);
                                if (mysqli_num_rows($result_p)) {
                                  while($row_p = mysqli_fetch_assoc($result_p)){
                                    

                                    if ($row["etat"] == 1) {
                                      echo "<h2>Rendez-vous passés</h2>";
                                      echo '<div class="form-group avatar"><button type="button" class="collapsible">'.$row_p['Nom']." ".$row_p['Prénom'].'</button><div class="content">';
                                      echo '<p>Email : '.$row_p["Email"]. '</p>';
                                      echo '<p>Genre : '.$row_p["genre"]. '</p>';
                                      echo '<p>Date de naissance : '.$row_p["Datenaissance"]. '</p>';
                                      echo '<p>Etat :'. '<span style="color: green;"> Rendez-vous Passé.</span>'. '</p>';
                                      echo '<p>Date du rendez-vous : '.$row["Dateti"].'</p>';
                                      echo '<a><span style="font-size:15px;cursor:pointer" onclick="openNav()">&#9998;ajouter ordonnance</span></a></div>';
                                    }elseif($row["etat"] == 2) {
                                      echo "<h2>En attente du patient</h2>";
                                      echo '<div class="form-group avatar"><button type="button" class="collapsible">'.$row_p['Nom']." ".$row_p['Prénom'].'</button><div class="content">';
                                    echo '<p>Email : '.$row_p["Email"]. '</p>';
                                    echo '<p>Genre : '.$row_p["genre"]. '</p>';
                                    echo '<p>Date de naissance : '.$row_p["Datenaissance"]. '</p>';
                                      echo '<p>Etat :'. '<span style="color: blue;"> En attente du patient...</span>'. '</p></div>';
                                    }else{
                                      echo "<h2>Vous n'avez pas de rendez-vous.</h2></div>";
                                    }
                                  }
                                }  
                              }
                            } else {
                              echo "<p>etat :Vous n'avez pas de rendez-vous.</p>";
                            }
                            ?>
                          <div id="mySidenav" class="sidenav">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           

                                <div class="form-group" style="margin-top:5px;">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="text" name="Médicament1" placeholder=" Médicament 1 (obligatoire)" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj1"  placeholder="# fois par jour (obligatoire)" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap1"   placeholder="av/ap repas (obligatoire)" class="form-control" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="text" name="Médicament2" placeholder=" Médicament 2 " class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj2"  placeholder="# fois par jour" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap2"   placeholder="av/ap repas " class="form-control" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="text" name="Médicament3" placeholder=" Médicament 3 " class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="number" name="fpj3"  placeholder="# fois par jour" class="form-control" >
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="text" name="avap3"   placeholder="av/ap repas" class="form-control" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div style="margin-top:10px;">
                                  <textarea name="remarque" placeholder="Remarque...(obligatoire)"></textarea>
                                </div>
                                <button type="submit" name="submit-ordonnance" class="btn btn-primary btn-block" style="margin-top:10px;">Envoyer</button>
                            </form>                           
                          </div>



                          <script>
                          function openNav() {
                            document.getElementById("mySidenav").style.width = "600px";
                          }

                          function closeNav() {
                            document.getElementById("mySidenav").style.width = "0";
                          }




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





                          (function() {
                            window.requestAnimFrame = (function(callback) {
                              return window.requestAnimationFrame ||
                                window.webkitRequestAnimationFrame ||
                                window.mozRequestAnimationFrame ||
                                window.oRequestAnimationFrame ||
                                window.msRequestAnimaitonFrame ||
                                function(callback) {
                                  window.setTimeout(callback, 1000 / 60);
                                };
                            })();

                            var canvas = document.getElementById("sig-canvas");
                            var ctx = canvas.getContext("2d");
                            ctx.strokeStyle = "#222222";
                            ctx.lineWidth = 4;

                            var drawing = false;
                            var mousePos = {
                              x: 0,
                              y: 0
                            };
                            var lastPos = mousePos;

                            canvas.addEventListener("mousedown", function(e) {
                              drawing = true;
                              lastPos = getMousePos(canvas, e);
                            }, false);

                            canvas.addEventListener("mouseup", function(e) {
                              drawing = false;
                            }, false);

                            canvas.addEventListener("mousemove", function(e) {
                              mousePos = getMousePos(canvas, e);
                            }, false);

                            // Add touch event support for mobile
                            canvas.addEventListener("touchstart", function(e) {

                            }, false);

                            canvas.addEventListener("touchmove", function(e) {
                              var touch = e.touches[0];
                              var me = new MouseEvent("mousemove", {
                                clientX: touch.clientX,
                                clientY: touch.clientY
                              });
                              canvas.dispatchEvent(me);
                            }, false);

                            canvas.addEventListener("touchstart", function(e) {
                              mousePos = getTouchPos(canvas, e);
                              var touch = e.touches[0];
                              var me = new MouseEvent("mousedown", {
                                clientX: touch.clientX,
                                clientY: touch.clientY
                              });
                              canvas.dispatchEvent(me);
                            }, false);

                            canvas.addEventListener("touchend", function(e) {
                              var me = new MouseEvent("mouseup", {});
                              canvas.dispatchEvent(me);
                            }, false);

                            function getMousePos(canvasDom, mouseEvent) {
                              var rect = canvasDom.getBoundingClientRect();
                              return {
                                x: mouseEvent.clientX - rect.left,
                                y: mouseEvent.clientY - rect.top
                              }
                            }

                            function getTouchPos(canvasDom, touchEvent) {
                              var rect = canvasDom.getBoundingClientRect();
                              return {
                                x: touchEvent.touches[0].clientX - rect.left,
                                y: touchEvent.touches[0].clientY - rect.top
                              }
                            }

                            function renderCanvas() {
                              if (drawing) {
                                ctx.moveTo(lastPos.x, lastPos.y);
                                ctx.lineTo(mousePos.x, mousePos.y);
                                ctx.stroke();
                                lastPos = mousePos;
                              }
                            }

                            // Prevent scrolling when touching the canvas
                            document.body.addEventListener("touchstart", function(e) {
                              if (e.target == canvas) {
                                e.preventDefault();
                              }
                            }, false);
                            document.body.addEventListener("touchend", function(e) {
                              if (e.target == canvas) {
                                e.preventDefault();
                              }
                            }, false);
                            document.body.addEventListener("touchmove", function(e) {
                              if (e.target == canvas) {
                                e.preventDefault();
                              }
                            }, false);

                            (function drawLoop() {
                              requestAnimFrame(drawLoop);
                              renderCanvas();
                            })();

                            function clearCanvas() {
                              canvas.width = canvas.width;
                            }

                            // Set up the UI
                            var sigText = document.getElementById("sig-dataUrl");
                            var sigImage = document.getElementById("sig-image");
                            var clearBtn = document.getElementById("sig-clearBtn");
                            var submitBtn = document.getElementById("sig-submitBtn");
                            clearBtn.addEventListener("click", function(e) {
                              clearCanvas();
                              sigText.innerHTML = "Data URL for your signature will go here!";
                              sigImage.setAttribute("src", "");
                            }, false);
                            submitBtn.addEventListener("click", function(e) {
                              var dataUrl = canvas.toDataURL();
                              sigText.innerHTML = dataUrl;
                              sigImage.setAttribute("src", dataUrl);
                            }, false);

                          })();
                          </script>
                          </div>
<body>
</div> 
</html>