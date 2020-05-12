<?php
    
if (isset($_POST['login-p-submit'])) {
    require 'dbh.inc.php';

    $email = $_POST["email"];
    $psw = $_POST["password"];
    if (empty($email) || empty($psw) ) {
        header("Location: ../login.php?error=emtyfields&email=".$email);
        exit();
    }
    else{
        $sql = "SELECT * FROM Patient WHERE Email=?;";
        $statment = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statment, $sql)){//cheking if our connection to the databse doesn't work
            header("Location: ../login.php?error=sqlerror1");
        exit();
        }
        else {
            mysqli_stmt_bind_param($statment, "s", $email);
            mysqli_stmt_execute($statment);
            $result = mysqli_stmt_get_result($statment);
            if ($row = mysqli_fetch_assoc($result)) {//fetching the result in an associative array, so we can use it after

                if ($psw !== $row['mdp']) {//if the password is wrong
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }elseif($psw == $row['mdp']){
                    session_start();
                    $_SESSION['unserId'] = $row['id'];
                    $_SESSION['unserLastname'] = $row['Nom'];
                    $_SESSION['unserFirstname'] = $row['Prénom'];
                    $_SESSION['unserEmail'] = $row['Email'];
                    $_SESSION['unserBirth'] = $row['Datenaissance'];
                    $_SESSION['unserGender'] = $row['genre'];
                    $_SESSION['unserTel'] = $row['Tel'];
                    $_SESSION['unserS'] = $row['GroupS'];

                    header("Location: ../index.php?login=success");
                    exit();

                }else{//if the password is wrong
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            }else{
                header("Location: ../login.php?error=no_user");
                exit();
            }
        }
    }
    
}else {
    header("Location: ../login.php");
    exit();
}
