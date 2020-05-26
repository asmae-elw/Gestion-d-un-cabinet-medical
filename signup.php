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
    <title>Inscription</title>
</head>

<form class="form-horizontal" action="includes/signup.inc.php" role="form" method="post">
    <h2>S'enregister en tant que patient </h2>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="firstName" placeholder="Nom" class="form-control" name="nom" autofocus>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="lastName" placeholder="Prénom" class="form-control" name="prénom">
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="password" name="password" id="password" placeholder="Votre Mot de passe" class="form-control" >
                    </label>
                </div>
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="password" name="password-R" id="password-R" placeholder="Une deuxième fois..." class="form-control" >
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="date" id="birthDate" name="dateNaissance" class="form-control" placeholder="Date de naissance">
        </div>
    </div>
    

    <div class="form-group">
            <select  class="form-control" id="Genre" name="Genre">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>
    
    

    <button type="submit" name="signup-submit" class="btn btn-primary btn-block">S'enregister</button>
</form> 



