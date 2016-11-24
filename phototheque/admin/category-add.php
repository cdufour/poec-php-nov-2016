<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enregistrer une catégorie</title>
  </head>
  <body>
    <?php include('includes/menu.inc.php') ?>
    <h2>Enregistrer une catégorie</h2>
    <form action="category-save.php" method="post">
      <input type="hidden" name="action" value="insert">
      Nom: <input type="text" name="name"><br>
      <input type="submit" value="Enregistrer">
    </form>
  </body>
</html>
