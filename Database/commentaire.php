<?php

require $_SERVER['DOCUMENT_ROOT'].'/Database/database.php';

if(isset($_POST['btn'])){
    $komantera = nl2br(htmlspecialchars($_POST['texte']));
    $date = date('d/m/y');
    if(!empty($komantera)){
            $mandefa = $bdd->prepare('INSERT INTO commentaire(id_user,nom,commentaire) VALUES (?,?,?)');
            $mandefa->execute(array($_SESSION['id'],$_SESSION['nom'],$komantera));
            $makac = $bdd->prepare('SELECT id_user,nom,commentaire FROM commentaire WHERE id_user = ?');
            $makac->execute(array($_SESSION['id']));
            
           header('location:/acceuil.php');
    }
}
else{}
?>