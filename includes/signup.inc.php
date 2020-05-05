<?php
if (isset($_POST['signup-submit'])) {
    require "dbh.inc.php";// link the database handler

    $nom = $_POST["nom"];
    $prenom = $_POST["prénom"];
    $email = $_POST["email"];
    $psw = $_POST["password"];
    $pswR = $_POST["password-R"];

    if (empty($nom) || empty($prenom) || empty($email) || empty($psw) || empty($pswR)) {
        header("Location: ../signup.php?error=emtyfields&nom=".$nom."&prénom=".$prenom."&email=".$email);
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//CHECK IF THE EMAIL IS VALID
        header("Location: ../signup.php?error=invalidemail&nom=".$nom);
        exit();
    }
    elseif ($psw!=$pswR) {//check if the paswords match
        header("Location: ../signup.php?error=invalidpassword&nom=".$nom);
        exit();
    }
    else {
        $sql = "SELECT Email FROM Patient WHERE Email=?";// create sql statment with a placeholder '?'
        $statment = mysqli_stmt_init($database);//connect to the database 
        if (!mysqli_stmt_prepare($sql, $statment)) {
            header("Location: ../signup.php?error=sqlerror");
        exit();
        }
    }

}
?>