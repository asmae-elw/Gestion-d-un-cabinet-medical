<?php
    
if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';
    $nom = $_POST["nom"];
    $prenom = $_POST["prénom"];
    $email = $_POST["email"];
    $psw = $_POST["password"];
    $pswR = $_POST["password-R"];
    $datenaissance = $_POST["dateNaissance"];
    $genre = $_POST["Genre"];


    if (empty($nom) || empty($prenom) || empty($email) || empty($psw) || empty($pswR) || empty($datenaissance) || empty($genre)) {
        header("Location: ../signup.php?error=emtyfields&nom=".$nom."&prénom=".$prenom."&email=".$email);
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//CHECK IF THE EMAIL IS VALID
        header("Location: ../signup.php?error=invalidemail&nom=".$nom);
        exit();
    }
    elseif ($psw!==$pswR) {//check if the paswords matchs
        header("Location: ../signup.php?error=invalidpassword&nom=".$nom);
        exit();
    }
    
    else {// to check if the email is already used
        $sql = "SELECT * FROM Patient WHERE Email=?;";// checking if the email exists in the databse 
        $statment = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statment, $sql)) { //cheking if our connection to the databse doesn't work
            header("Location: ../signup.php?error=sqlerror1");
            exit();
        }
        else{
            mysqli_stmt_bind_param($statment, "s", $email);
            mysqli_stmt_execute($statment);
            mysqli_store_result($statment);
            $resultcheck = mysqli_stmt_num_rows($statment);//stores the number of the same emails in the database
            if ($resultcheck > 0){
                header("Location: ../signup.php?error=emailused");
                exit();
            }
            else {
                $sql = "INSERT INTO Patient(Nom, Prénom, Email, mdp, Datenaissance, genre) VALUES(?,?,?,?,?,?)";
                $statment = mysqli_stmt_init($conn);//connect to the database 
                if (! mysqli_stmt_prepare( $statment, $sql)) { //cheking if our connection to the databse works
                    header("Location: ../signup.php?error=sqlerror2");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($statment, "ssssss",$nom,$prenom,$email,$psw,$datenaissance,$genre);
                    mysqli_stmt_execute($statment);
                    header("Location: ../login.php?signup=success");
                    exit();
                }
        }
    }
    mysqli_stmt_close($statment);//closing the statment
    mysqli_close($conn);
    }
}else{
    header("Location: ../signup.php");
    exit();
}
