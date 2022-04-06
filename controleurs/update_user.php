<?php
//fichier de connexion à la BDD
        include '../utils/connectBdd.php';

 //importer le model
include '../model/model_user.php';  

// importer l'interface 
include '../view/view_update_user.php';
//test si $_GET['id'] existe
if(isset($_GET['id']) AND $_GET['id'] !=''){
    //stocke $_GET['id'] dans une variable $value
    $id = $_GET['id'];
    //test le contenu des champs du formulaire
    if(isset($_POST['nom_util'])AND isset($_POST['prenom_util'])
     AND  isset($_POST['mail_util']) AND isset($_POST['mdp_util']) AND
        $_POST['nom_util'] != "" AND $_POST['prenom_util'] !=""
         AND $_POST['mail_util'] !="" AND $_POST['mdp_util'] !="" ){
        //stocket dans des variables les super globales POST
        $nom = $_POST['nom_util'];
        $prenom = $_POST['prenom_util'];
        $email = $_POST['mail_util'];
        $mdp = $_POST['mdp_util'];
        updateUser($bdd,$nom,$prenom,$email,$mdp,$id);
        //afficher un message de confirmation
        echo "<p>$nom à été modifié en BDD</p>";
    }
    //test si les champs du formulaire ne sont pas remplis
    else{
        echo '<p>Veuillez remplir les champs du  formulaire</p>';
    }
}
?>