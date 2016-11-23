<?php

// etape 1: enregistrer fichier sur serveur (apache)
$from = $_FILES["photo"]["tmp_name"];
$to = "uploaded-photos/" . $_FILES["photo"]["name"];

// todo: vérifier si une photo de même n'existe pas déjà
move_uploaded_file($from, $to);

// etape 2: ajouter photo dans db (mysql)
$db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

$query = $db->prepare('INSERT INTO photo (name, author, place, category) VALUES (?, ?, ?, ?)');
$query->execute(array(
  $_FILES["photo"]["name"],
  $_POST["author"],
  $_POST["place"],
  implode(",", $_POST["categories"])
));

// redirection
header('Location:photo-list.php');

?>
