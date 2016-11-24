<?php
include('includes/util.inc.php');
$db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');
$exists = checkIfExist($db, "photo", "name", $_FILES["photo"]["name"]);

if ($exists) {
  echo 'La photo ' . $_FILES["photo"]["name"] . ' existe déjà...';
  echo '<p><a href="photo-add.php">Ajouter une photo<a></p>';
} else {

  // etape 1: enregistrer fichier sur serveur (apache)
  $from = $_FILES["photo"]["tmp_name"];
  $to = "../public/uploaded-photos/" . $_FILES["photo"]["name"];
  move_uploaded_file($from, $to);

  // etape 2: ajouter photo dans db (mysql)
  $query = $db->prepare('INSERT INTO photo (name, author, place, category) VALUES (?, ?, ?, ?)');
  $query->execute(array(
    $_FILES["photo"]["name"],
    $_POST["author"],
    $_POST["place"],
    implode(",", $_POST["categories"])
  ));

  // redirection
  header('Location:photo-list.php');

}

?>
