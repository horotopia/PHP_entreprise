<?php
include('connect.php');

$db = new Database();

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$pays = $_POST['pays'];

$requete = "INSERT INTO divers SET prenom='$prenom', nom='$nom', pays='$pays'";
$db->query($requete);

header('Location: index.php');
?>