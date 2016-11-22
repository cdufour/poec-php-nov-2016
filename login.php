<?php

print_r($_POST); // print_r permet d'afficher le contenu d'un tableau
$email = $_POST["email"];
$password = $_POST["password"];

// vérifier dans la db que l'email existe
// connexion à la db en utilisant PDO
$db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

//$result = $db->query('SELECT * FROM clients WHERE email = \'' . $email . '\'');

// requête préparée : pour mieux gérer les paramètres variables
$query = $db->prepare('SELECT * FROM clients WHERE email = ? AND password = ?');
$query->execute(array($email, $password));
// execute() ne nécessite aucune variable intermédiaire (de stockage)


// itération sur les résultats SQL de la requête SELECT * FROM clients
// pour afficher une liste
/*
while($client = $query->fetch(PDO::FETCH_OBJ)) {
  //print_r($row);
  //echo $client['name'] . '<br />';
  echo $client->name . '(email: ' . $client->email . ')<br />';

};
*/

if ($query->rowCount() == 0) {
  echo 'client introuvable';
} else {
  echo 'connexion réussie';
  header('Location:index.html'); // redirection
}




?>
