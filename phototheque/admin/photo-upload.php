<?php

// etape 1: enregistrer fichier sur serveur (apache)
$from = $_FILES["photo"]["tmp_name"];
$to = "uploaded-photos/" . $_FILES["photo"]["name"];
move_uploaded_file($from, $to);

// etape 2: ajouter photo dans db (mysql)
$db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

$query = $db->prepare('INSERT INTO photo VALUES (?, ?, ?, ?)');
$query->execute(array(
  $_FILES["photo"]["name"],
  $_POST["author"],
  $_POST["place"],
  ""
));


?>
