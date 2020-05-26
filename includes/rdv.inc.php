<?php
session_start();
if (isset($_POST['submit-rdv'])) {
    require 'dbh.inc.php';

    $date = $_POST['time'];
    $idm=$_POST['medecin'];
    $idp=$_SESSION['unserId'];
    $sql = "INSERT INTO  `Rendez-vous`(`Dateti`,`idm`,`idp`) VALUES(?,?,?);";
    $statment = mysqli_stmt_init($conn);
    if (! mysqli_stmt_prepare( $statment, $sql)) { //cheking if our connection to the databse works
        header("Location: ../avoir_rdv.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($statment, "sii", $date,$idm,$idp);
        mysqli_stmt_execute($statment);
        header("Location: ../avoir_rdv.php?success");
        exit();
    }
}