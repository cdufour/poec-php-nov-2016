<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Liste des photos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php include('includes/menu.inc.php') ?>
    <h2>Liste des photos</h2>
    <table class="table table-striped list">
      <thead>
        <tr>
          <th>Photo</th>
          <th>Auteur</th>
          <th>Lieu</th>
          <th>Catégories</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php

          $db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

          $query = $db->query('SELECT * FROM photo');

          while($photo = $query->fetch(PDO::FETCH_OBJ)) {
            $row = '<tr>';
            $row .= '<td><img src="../public/uploaded-photos/'.$photo->name.'"></td>';
            $row .= '<td>'.$photo->author.'</td>';
            $row .= '<td>'.$photo->place.'</td>';

            // ***** récupération des noms des catégories****
            $sql = "SELECT name FROM category WHERE id IN (".$photo->category.")";
            $query2 = $db->query($sql);

            $categories = "";
            while($category = $query2->fetch(PDO::FETCH_OBJ)) {
              $categories .= $category->name . ", ";
            }
            $len = strlen($categories); // strlen() retourne la longeur de la chaîne
            // http://php.net/manual/fr/function.substr.php
            $categories = substr($categories, 0, $len-2); // retrait des deux derniers caractères
            //***********************************************

            $row .= '<td>'.$categories.'</td>';

            $row .= '<td><a href="photo-delete.php?id='.$photo->id.'&name='.$photo->name.'" class="btn btn-xs btn-danger">Supprimer</a></td>';
            $row .= '</tr>';
            echo $row;
          }

        ?>

      </tbody>

    </table>

  </body>
</html>
