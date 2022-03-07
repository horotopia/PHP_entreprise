<?php
include('connect.php');

$db = new Database();

$id = $_GET['id'];


$requete = "DELETE FROM divers WHERE id=$id";
$db->query($requete);

header('Location: index.php');
?>