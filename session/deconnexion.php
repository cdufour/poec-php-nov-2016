<?php session_start()?>

<?php

// veiller à utiliser session_start() (accès à $_SESSION)
// avant d'executer session_destroy()
session_destroy(); // fermeture de la session

//$_SESSION = array();
//$_SESSION["client"] = "Portos";
header('Location:page2.php'); // redirection
?>
