<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enregisrer photo</title>
  </head>
  <body>
    <h2>Enregistrer photo</h2>

    <form action="photo-upload.php" enctype="multipart/form-data" method="post">
      <input type="file" name="photo"><br>
      Auteur: <input type="text" name="author"><br>
      Lieu: <input type="text" name="place"><br>
      Catégories:<br>
      <!-- todo: récupérer catégories depuis db -->
      <input type="submit" value="Enregistrer">
    </form>

  </body>
</html>
