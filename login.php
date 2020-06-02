<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="js/index.js"></script>

    <link rel="stylesheet" href="css/mystyle.css">
    <title>Connexion</title>
</head>

<div class="container">
    <form class="form-horizontal" action="includes/login.inc.php" role="form" method="post">
        <h2>Connectez-vous</h2>
        
        <div class="form-group">
            <div class="col-sm-12">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email" >
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-12">
                <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control" >   
            </div>    
        </div>
        <div class="form-group">
            <div class="col-sm-12">
            <select  class="form-control" id="Genre" name="Genre" style="height: 30px ! important;">
                <option value="Médecin">Médecin</option>
                <option value="Patient">Patient</option>
            </select>
            </div>
        </div>
        <a href="signup.php" style="text-align: center;">Vous n'avez pas un compte?</a>
        
        <button type="submit" name="login-submit" class="btn btn-primary btn-block">Connexion</button>
    </form> 
</div> 
