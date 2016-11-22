<?php
  // script serveur recevant la requête ajax du client

  // on récupère les données postées par le client
  $email = $_POST["email"];
  $password = $_POST["password"];

  $db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

  $query = $db->prepare('SELECT * FROM clients WHERE email = ? AND password = ?');
  $query->execute(array($email, $password));

  if ($query->rowCount() == 0) {
    echo 'false';
  } else {
    echo 'true';
  }

 ?>
