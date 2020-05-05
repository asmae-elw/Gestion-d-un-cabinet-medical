<?php
    require "header.php";
?>
<main>
<div class="container">

    <form class="form-horizontal" action="includes/login.inc.php" role="form" method="post">
        <h2>Connectez-vous</h2>
        
        <div class="form-group">
            <div class="col-sm-12">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email" autofocus>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-12">
                <input type="password" id="firstName" placeholder="Mot de passe" class="form-control" >   
            </div>    
        </div>
        <div class="creatacc">
            <a href="register_medecin.html"> Vous n'avez pas un compte?</a>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
    </form> 
</div> 
</main>