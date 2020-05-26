<?php
session_start();
if (isset($_POST['profile-mod-submit'])) {
    require 'dbh.inc.php';

    $id = $_SESSION['unserId'];
    $mail = $_POST['email'];
    $birth = $_POST['datenaissance'];
    $genre = $_POST['genre'];
    $tel = $_POST["tel"];
    $grps = $_POST["GroupS"];
    
    $sql = "UPDATE Patient SET Email=?, Datenaissance=?, genre=?, Tel=?, GroupS=? WHERE id=?;";
    $statment = mysqli_stmt_init($conn);//connect to the database 
    if (! mysqli_stmt_prepare( $statment, $sql)) { //cheking if our connection to the databse works
        header("Location: ../profil_patient_mod.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($statment, "sssssi",$mail,$birth,$genre,$tel,$grps,$id);
        mysqli_stmt_execute($statment);
        header("Location: ../profil_patient.php?success");
        exit();
    }
    header("Location: ../profil_patient.php");
    exit();
}