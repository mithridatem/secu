<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './manager/manager_article.php';
    include './vue/view_create_article.php';
    //message 
    $message = "";    
    //test si le bouton submit est cliqué
    if(isset($_POST['create'])){
        //test si les champs sont remplis
        if($_POST['nom_article'] !="" AND $_POST['prix_article'] !=""){
            //sécurisation des variables POST
            $nom = cleanInput($_POST['nom_article']);
            $prix = cleanInput($_POST['prix_article']);
            echo $prix;
            //instancier l'objet
            $art = new ManagerArticle($nom, $prix);
            var_dump($art);
            $art->createArticle($bdd);
            $message = mb_strtoupper($art->getNomArt())." a été ajouté en BDD";
        }
        //test sinon les champs sont vides
        else{
            $message = 'Les champs sont vides';
        }
    }
    //test sinon le bouton n'est pas cliqué
    else{
        $message = 'Pour ajouter un article cliquez sur ajouter';
    }
    //affichage du message d'erreur
    echo $message;

?>