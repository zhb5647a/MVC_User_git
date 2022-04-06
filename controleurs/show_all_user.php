<?php
//importer la connexion à la bdd
    include '../utils/connectBdd.php';
    //importer le model
    include '../model/model_user.php';
    //importer la vue(interface)
    include '../view/view_show_all_user.php';
    //stocker dans le variable le tableau des utilisateurs
$list = showAllUserV2($bdd);

// parcourir
foreach($list as $value){
// affiche pour chaque ligne du tableau le nom de l'utilisateur
echo '<p><a href="update_user.php?id='.$value['id_util'].'">le prenom est égal à : '.$value['prenom_util'].' le mdp est est égal à :
'.$value['mdp_util'].'</a></p>';
}
    ?>