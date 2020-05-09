<?php
    
if (isset($_POST['login-m-submit'])) {
    require 'dbh.inc.php';

    $email = $_POST["email"];
    $psw = $_POST["password"];
    if (empty($email) || empty($psw) ) {
        header("Location: ../login.php?error=emtyfields&email=".$email);
        exit();
    }
    else{
        $sql = "SELECT * FROM Médecin WHERE Email=?;";
        $statment = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statment, $sql)){//cheking if our connection to the databse doesn't work
            header("Location: ../login.php?error=sqlerror1");
        exit();
        }
        else {
            mysqli_stmt_bind_param($statment, "s", $email);
            mysqli_stmt_execute($statment);
            $result = mysqli_stmt_get_result($statment);
            if ($row = mysqli_fetch_assoc($result)) {//fatching the result in an associative array, so we can use it after

                if ($psw !== $row['mdpM']) {//if the password is wrong
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }elseif($psw == $row['mdpM']){
                    session_start();
                    $_SESSION['unserId'] = $row['id'];
                    $_SESSION['unserLastname'] = $row['Nom'];
                    $_SESSION['unserFirstname'] = $row['Prénom'];
                    $_SESSION['unserEmail'] = $row['Email'];
                    header("Location: ../profile_medecin.php?login=success");
                    exit();

                }else{//if the password is wrong
                    header("Location: ../login.php?error=wrongpassword2");
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
