<?php

var_dump($_POST);

$user = 'root';
$pass = '';

$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
$commentaire = $_POST['commentaire'];

try{
    $pdo = new PDO('mysql:host=localhost;dbname=projetweb', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $ajouter = "INSERT INTO `personnes`(`Pseudo`, `Email`, `Commentaire`) VALUES ('$pseudo','$mail','$commentaire')";
    $req = $pdo->prepare($ajouter);
    $req->execute();
    header('Location: contact.html');
    exit();
}catch(PDOException $e){
    print "Error: " . $e->getMessage();"<br>";
    die();
}
