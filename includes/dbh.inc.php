<?php
try{
    $database = new PDO('mysql:host=localhost;dbname=cabinet médical','root','');
    $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Error : '.$e -> getMessage());
}
?>