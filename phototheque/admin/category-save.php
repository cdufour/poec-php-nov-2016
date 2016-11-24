<?php
include('includes/util.inc.php');
$db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

$exists = checkIfExist($db, "category", "name", $_POST['name']);

if ($exists) {
  echo 'La catégorie ' . $_POST['name'] . ' existe déjà...';
  echo '<p><a href="category-add.php">Ajouter une catégorie<a></p>';
} else {
  if ($_POST['action'] == 'insert') {
    // mode insertion (soumission du formulaire de category-add.php)
    $query = $db->prepare('INSERT INTO category (name) VALUES (?)');
    $query->execute(array($_POST['name']));
  } else {
    // mode mise à jour (soumission du formulaire de category-edit.php)
    $query = $db->prepare('UPDATE category SET name = :name WHERE id = :id');
    $query->execute(array(
      ':name' => $_POST['name'],
      ':id' => $_POST['id']
    ));
  }
  header('Location:category-list.php');
}

?>
