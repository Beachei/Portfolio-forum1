<?php 

require 'Database/database.php';
$makac = $bdd->prepare('SELECT id_user,nom,commentaire FROM commentaire WHERE id_user = ?');
  $makac->execute(array($_SESSION['id']));


?>