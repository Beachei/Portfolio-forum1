<?php 

session_start();
$user = "ISAIA";
$pass = "";


try {
    $bdd = new PDO('mysql:host=localhost;dbname=lost', $user, $pass);
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>