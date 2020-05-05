<?php
    require "header.php";
?>
<main>
<form class="form-horizontal" action="includes/signup.inc.php" role="form" method="post">
    <h2>S'enregister en tant que patient</h2>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="firstName" placeholder="Nom" class="form-control" name="nom" autofocus>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="lastName" placeholder="Prénom" class="form-control" name="prénom" >
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
                        <input type="password" name="password" id="password-R" placeholder="Une deuxième fois..." class="form-control" >
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="form-group">

        <div class="col-sm-12">
            <input type="date" id="birthDate" name="dateNaissance" class="form-control">
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="phoneNumber" id="phoneNumber" name="numeroTel" placeholder="Numéro de téléphone" class="form-control">
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="number" id="height" placeholder="Votre taille en centimetres" class="form-control">
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="number" id="weight" name="masse" placeholder="Votre masse en kilogrammes" class="form-control">
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-12">
            <input type="text" id="gSangin" name="groupe" placeholder="Votre group sangin" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-6">Genre :</label>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="radio" name="homme" id="femaleRadio" value="Female"> Homme
                    </label>
                </div>
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="radio" name="femme" id="maleRadio" value="Male"> Femme
                    </label>
                </div>
            </div>
        </div>
    </div>  -->
    

    <button type="submit" name="signup-submit" class="btn btn-primary btn-block">S'enregister</button>
</form> 
</main>


