<?php
require 'Database/database.php';

if(isset($_POST['btnc'])){
    $nom = htmlspecialchars($_POST['nom']);
    $mdp = htmlspecialchars($_POST['mdpc']);
    
    if(!empty($nom) && !empty($mdp)){
        $mananacompteve = $bdd->prepare("SELECT * FROM user_ins WHERE nom = ?");
        $mananacompteve->execute(array($nom));
        $infocompte = $mananacompteve->fetch();
        if($mananacompteve->rowCount() > 0){
            if(password_verify($mdp,$infocompte['mdp'])){
                $_SESSION['Auth'] = true;
                $_SESSION['id'] = $infocompte['id'];
                $_SESSION['nom'] = $infocompte['nom'];
                $_SESSION['prenom'] = $infocompte['prenom'];
                $_SESSION['mdp'] = $infocompte["mdp"];
                
               header('location:/acceuil.php');
               require '/acceuil.php';
            }
            else{
                $php_errormsg = "Diso ilay soratra miafina izay nosoratanao...";
            }
        }
        else{
            $php_errormsg = "Tsy mbl misoratra ato io anarana io...";
        }
    }
    else{
        $php_errormsg = "Mba fenoy tompoko le banga...";
    }
}
?>