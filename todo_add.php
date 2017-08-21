<?php 
include 'function.php';

$title = $_POST['titre'];
$object = $_POST['objet'];
$deadline = $_POST['deadline'];
$bdd = connectToDb();
$reponse = $bdd->query('INSERT INTO todo(ID, titre, objet, day_add, deadline ) VALUES(NULL, '$title','$object', '2017-08-03', '$deadline');
?>