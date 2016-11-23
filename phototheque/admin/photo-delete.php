<?php
$db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

//variante 1
//$query = $db->prepare('DELETE FROM photo WHERE id = ?');
//$query->execute(array($_GET["id"]));

// variante 2
$query = $db->prepare('DELETE FROM photo WHERE id = :id');
$query->execute(array(
  ':id' => $_GET["id"]
));

// supprime le fichier sur le serveur
unlink('uploaded-photos/' . $_GET["name"]);

// redirection
header('Location:photo-list.php');

?>
