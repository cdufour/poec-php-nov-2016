<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enregisrer photo</title>
  </head>
  <body>
    <?php include('includes/menu.inc.php') ?>
    <h2>Enregistrer photo</h2>

    <form action="photo-upload.php" enctype="multipart/form-data" method="post">
      <input type="file" name="photo"><br>
      Auteur: <input type="text" name="author"><br>
      Lieu: <input type="text" name="place"><br>
      Catégories:<br>
      <!-- todo: récupérer catégories depuis db -->
      <?php
        $db = new PDO('mysql:host=localhost;dbname=formation-php', 'root', '');

        $query = $db->query('SELECT * FROM category');

        while($category = $query->fetch(PDO::FETCH_OBJ)) {
          echo '<input type="checkbox" value="'.$category->id.'" name="categories[]">' . $category->name . '<br />';
        }

        $query->closeCursor(); // indique à mysql que le traitement est terminé

      ?>
      <input type="submit" value="Enregistrer">
    </form>

  </body>
</html>
