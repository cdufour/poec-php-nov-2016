<?php

$db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

$query = $db->query('SELECT * FROM photo');

$photos = array(); // tableau servant à stocker les photos
while($photo = $query->fetch()) {
  //traitement des noms des catégories

  if ($photo["category"] != "") {
    // interrogation de la db pour obtenir les noms correspondants aux ids
    $sql = "SELECT name FROM category WHERE id IN (".$photo["category"].")";
    $query2 = $db->query($sql);

    $category_names = array();
    while($category = $query2->fetch()) {
      array_push($category_names, $category["name"]);
    }
    // en sortie de boucle, nous obtenons un tableau de noms de catégorie
    // écrasement des catégories de la photo itérée (ex: 1,3 => Art, Sport)
    $photo["category"] = implode(", ", $category_names);
    $query2->closeCursor();
  }
  array_push($photos, $photo);
}

$query->closeCursor();
// transforme le tableau php en une chaîne de caractères json
echo json_encode($photos);
?>
