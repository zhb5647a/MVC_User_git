<?php
    //fonction qui ajoute un utilisateur en BDD(utilisateur)
    function adduser($bdd, $nom, $prenom, $mail,$mdp){
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur(nom_util, prenom_util,
            mail_util, mdp_util) 
            VALUES(:nom_util, :prenom_util, :mail_util, :mdp_util)');
            $req->execute(array(
                'nom_util' => $nom,
                'prenom_util' =>$prenom,
                'mail_util' =>$mail,
                'mdp_util' =>$mdp
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //affiche tous les utilisateurs (version alternative)
    function showAllUserV2($bdd) {
        $req = $bdd->prepare("SELECT * FROM utilisateur");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function updateUser($bdd,$nom,$prenom,$email,$mdp,$id){
        try{
            $req = $bdd->prepare('UPDATE utilisateur SET nom_util = :nom_util,
            prenom_util = :prenom_util, mail_util = :mail_util, mdp_util = :mdp_util WHERE id_util = :id_util');
            $req->execute(array(
                'id_util' => $id,
                'nom_util' => $nom,
                'prenom_util' =>$prenom,
                'mail_util' =>$email,
                'mdp_util' =>$mdp
                
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>