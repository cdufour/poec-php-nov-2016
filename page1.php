<?php
session_start();
require('util.inc.php');
?>

<?php

  if (isUserConnected()) {
    echo "Tu es connecté, tu as accès au contenu";
  } else {
    echo "Identification requise";
  }

 ?>
