<?php
                                require 'includes/dbh.inc.php';
                                $i = 0;
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
                                        
                                      }
                                      $sql3 = "SELECT * FROM `Ordonnance` WHERE idr=".$idr;
                                      $result_o = mysqli_query($conn, $sql3);
                                      if (mysqli_num_rows($result_o)>0){
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
                                        $i += 1;
                                      }
                                      if ($etat == 1 || $remarque !== "") {
                                          echo "<table>
                                          <tr>
                                            <th>rendez-vous</th>
                                            <th>Date et heure</th>
                                            <th>Docteur</th>
                                            <th> remarque du médecin</th>
                                            <th> ordonnace </th>
                                          </tr>
                                          <tr>";
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$dater."</td>";
                                        echo "<td>". $preM . $nomM."</td>";
                                        echo "<td>".$remarque."</td>";
                                        echo '<td> <a type="button" class="collapsible">ordonnace</a>
                                        <div class="content">';
                                        echo '<ol><li>' .$med1. "  "."<br>". $nfj1 ." fois par jour<br>".$avap1.'</li>';
                                        echo '<li>'.$med2. "  " ."<br>". $nfj2 ." fois par jour<br>".$avap2.'</li>';
                                        echo '<li>'.$med3. "  " ."<br>". $nfj3 ." fois par jour<br>".$avap3.'</li>';
                                        echo '</ol></tr>';
                                      }else{
                                        echo "<h2> Pas d'historique</h2>";
                                      }
                                      
                                  }
                                }
                                ?>