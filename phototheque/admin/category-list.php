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
    <h2>Liste des catégories</h2>
    <table class="table table-striped list">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');
          $query = $db->query('SELECT * FROM category ORDER BY name ASC');

          while($category = $query->fetch(PDO::FETCH_OBJ)) {
            $row = '<tr>';
            $row .= '<td>'.$category->name.'</td>';
            $row .= '<td>';
            $row .= '<a class="btn btn-xs btn-primary" href="category-edit.php?id='.$category->id.'&name='.$category->name.'">Modifier</a> ';
            $row .= '<a class="btn btn-xs btn-danger" href="category-delete.php?id='.$category->id.'">Supprimer</a> ';
            $row .= '</td>';
            $row .= '</tr>';
            echo $row;
          }
        ?>
      </tbody>
    </table>

  </body>
</html>
