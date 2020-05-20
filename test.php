while($row = mysqli_fetch_assoc($result)) {
                                $sql2 = "SELECT * FROM `Patient` WHERE id=".$row["idp"];
                                $result_p = mysqli_query($conn, $sql2);
                                if (mysqli_num_rows($result_p)) {
                                  while($row_p = mysqli_fetch_assoc($result_p)){
                                    echo '<div class="form-group avatar">
                                    <button type="button" class="collapsible">'.$row_p['Nom']." ".$row_p['Prénom'].'</button>
                                    <div class="content">';
                                    echo '<p>id patient :'.$row["idp"]. '</p>';
                                    if ($row["etat"] == 1) {
                                      echo '<p>Etat :'. '<span style="color: green;"> Fait</span>'. '</p>';
                                      echo '<p>Date du rendez-vous : '.$row["Date"].' à '. $row["Temps"] .'</p>';
                                      echo '<a><span style="font-size:15px;cursor:pointer" onclick="openNav()">&#9998;ajouter ordonnance</span></a>';
                                    }elseif($row["etat"] !== 1) {
                                      echo '<p>etat :'. '<span style="color: red;"> Annulé !</span>'. '</p>';
                                    }
                                }
                              }