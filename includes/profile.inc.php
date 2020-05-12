<?php
session_start();
if (isset($_POST['profile-submit'])) {
    require 'dbh.inc.php';

    $id = $_SESSION['unserId'];
    $tel = $_POST["Tel"];
    $grps = $_POST["GroupS"];
    
    $sql = "UPDATE Patient SET Tel=?, GroupS=? WHERE id=?;";
    $statment = mysqli_stmt_init($conn);//connect to the database 
    if (! mysqli_stmt_prepare( $statment, $sql)) { //cheking if our connection to the databse works
        header("Location: ../profil_patient.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($statment, "ssi",$tel,$grps,$id);
        mysqli_stmt_execute($statment);
        header("Location: ../profil_patient.php?signup=success");
        exit();
    }
    header("Location: ../profil_patient.php");
    exit();
}