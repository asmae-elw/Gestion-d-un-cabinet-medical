<?php
session_start();
if (isset($_POST['submit-ordonnance'])) {
    require 'dbh.inc.php';
    $date_ordonnance = $_POST['date'];
    $medicament1 = $_POST['Médicament1'];
    $nbredefois1 = $_POST['fpj1'];
    $avap1 = $_POST['avap1'];

    $medicament2 = $_POST['Médicament2'];
    $nbredefois2 = $_POST['fpj2'];
    $avap2 = $_POST['avap2'];

    $medicament3 = $_POST['Médicament3'];
    $nbredefois3 = $_POST['fpj3'];
    $avap3 = $_POST['avap3'];
    $remarque = $_POST['remarque'];

    
    $sql = "SELECT * FROM `Rendez-vous` WHERE idm=".$_SESSION['DId'];
    $result = mysqli_query($conn, $sql);
    $statment = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statment, $sql)) { //cheking if our connection to the databse doesn't work
        header("Location: ../ajouter_ordonnance.php?error=sqlerror1");
        exit();
    }elseif (mysqli_num_rows($result)) {
        while($row = mysqli_fetch_assoc($result)) {
            $idr = $row['id'];
            $sql2 = "SELECT * FROM `Patient` WHERE id=".$row["idp"];
            $result_p = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result_p)) {
                while($row_p = mysqli_fetch_assoc($result_p)){
                    $idp = $row_p['id']; #id du patient
                }
            }
        }
    }
    $sql3 = "INSERT INTO Ordonnance (idr, Medicament1, nfj1, avap1, Medicament2, nfj2, avap2, Medicament3, nfj3, avap3, remarque) Values(?,?,?,?,?,?,?,?,?,?,?) ;";
    $statment = mysqli_stmt_init($conn); #resultat ordonnance
    if (! mysqli_stmt_prepare( $statment, $sql3)) { //cheking if our connection to the databse works
        header("Location: ../ajouter_ordonnance.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($statment, "isissississ", $idr,$medicament1, $nbredefois1, $avap1, $medicament2, $nbredefois2, $avap2, $medicament3, $nbredefois3, $avap3, $remarque);
        mysqli_stmt_execute($statment);
        header("Location: ../ajouter_ordonnance.php?success");
        exit();
    }

}else {
    header("Location: ../signup.php");
    exit();
}