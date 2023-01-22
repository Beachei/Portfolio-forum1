<?php 

require('Database/database.php');

$surnom = htmlspecialchars($_POST['surnom']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mdp = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
$btn = ($_POST['btn']);


if(isset($btn)){
    if(!empty($surnom) && !empty($nom) && !empty($prenom) && !empty($mdp)){
        $mpandinika = $bdd->prepare('SELECT nom FROM user_ins WHERE nom = ?');
        $mpandinika->execute(array($nom));
        if($mpandinika->rowCount() == 0){

         $mandefa = $bdd->prepare('INSERT INTO user_ins(surnom,nom,prenom,mdp) VALUES(?,?,?,?)');
         $mandefa->execute(array($surnom,$nom,$prenom,$mdp)); 
        
         $makanyinfoavyamindatabase= $bdd->prepare('SELECT id,nom,prenom FROM user_ins WHERE nom = ? AND prenom=? ');
         $makanyinfoavyamindatabase->execute(array($nom,$prenom));

         $tabilaomombmombanyolona= $makanyinfoavyamindatabase->fetch();
         $_SESSION['Auth'] = true ;
         $_SESSION['id'] = $tabilaomombmombanyolona['id'];
         $_SESSION['nom'] = $tabilaomombmombanyolona['nom'];
         $_SESSION['prenom']=$tabilaomombmombanyolona['prenom'];

         header('location:acceuille.php');
       
        }
        else{
            echo'user already existe';
        }
    }
    else{
        $error = 'Mba fenoy le banga e!nareo ko tsy mijery mhts....';
    }
}
?>