<?php 
require ('Database/database.php');


if(isset($_POST['btn'])){
    $surnom = htmlspecialchars($_POST['surnom']);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = password_hash($_POST['mdp'],PASSWORD_DEFAULT);


    if(!empty($surnom) && !empty($nom) && !empty($prenom) && !empty($mdp)){
        
        $Mpijerijery = $bdd->prepare('SELECT nom , prenom FROM user_ins WHERE nom = ? AND prenom = ?');
        $Mpijerijery->execute(array($nom,$prenom));
        $MpijeryjerySolonanarana = $bdd->prepare('SELECT surnom FROM user_ins WHERE surnom = ?');
        $MpijeryjerySolonanarana->execute(array($surnom));
        
              if($Mpijerijery->rowCount() == 0){
                  $mandefa = $bdd->prepare('INSERT INTO user_ins(surnom,nom,prenom,mdp) VALUE (?,?,?,?)');
                  $mandefa->execute(array($surnom,$nom,$prenom,$mdp));
                  
                  $infoOlona= $bdd->prepare('SELECT id,surnom,nom,prenom FROM user_ins where surnom = ? AND nom = ? AND prenom = ?');
                  $infoOlona->execute(array($surnom,$nom,$prenom));

                  $tableauinfoOlona = $infoOlona->fetch();

                  $_SESSION['Auth'] = true;
                  $_SESSION['id'] = $tableauinfoOlona['id'];
                  $_SESSION['surnom'] = $tableauinfoOlona['surnom'];
                  $_SESSION['nom'] = $tableauinfoOlona['nom'];
                  $_SESSION['prenom'] = $tableauinfoOlona['prenom'];
                  header ('location: acceuil.php');
                 }
             else{
                $error = 'efa misoratra ato io anaran olona mpampiasa io';
                 }
              if($MpijeryjerySolonanarana->rowCount() ==0){
                $mandefa = $bdd->prepare('INSERT INTO user_ins(surnom,nom,prenom,mdp) VALUE (?,?,?,?)');
                  $mandefa->execute(array($surnom,$nom,$prenom,$mdp));
                  

                  $_SESSION['Auth'] = true;
                  $_SESSION['id'] = $tableauinfoOlona['id'];
                  $_SESSION['surnom'] = $tableauinfoOlona['surnom'];
                  $_SESSION['nom'] = $tableauinfoOlona['nom'];
                  $_SESSION['prenom'] = $tableauinfoOlona['prenom'];
                  header ('location: acceuil.php');
              }
              else{
                $error = 'efa misoratra ato io Solon anaran olona mpampiasa io';
                 } 
    }
    else{
        $error = 'Misy banga mbl tsy feno tompoko';
    }
}
else{

}


?>