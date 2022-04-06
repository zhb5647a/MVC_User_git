<?php
    //fichier de connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=mabase', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>