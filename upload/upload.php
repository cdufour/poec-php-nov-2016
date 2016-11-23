<?php
//print_r($_FILES);

$max_size = 20000;
$allowed_formats = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');

if ($_FILES["fichier"]["size"] > $max_size ||
  !in_array($_FILES["fichier"]["type"], $allowed_formats)) {
  echo "Upload non autorisé";
} else {
  move_uploaded_file($_FILES["fichier"]["tmp_name"], 'files/' . $_FILES["fichier"]["name"]);
  echo 'Upload réussi !';
}
?>
