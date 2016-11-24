<?php

function checkIfExist($db, $table, $column, $value) {
  // construction de la requête sql
  $sql = "SELECT * FROM " . $table;
  $sql .= " WHERE " . $column . " = '" . $value . "'";

  // exécution
  $query = $db->prepare($sql);
  $query->execute();

  // retourne faux si la valeur recherchée n'a pas été trouvée
  // sinon retourne vrai
  return ($query->rowCount() == 0) ? false : true;
}

?>
