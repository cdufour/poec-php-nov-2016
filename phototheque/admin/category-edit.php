<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modifier la catégorie</title>
  </head>
  <body>
    <?php include('includes/menu.inc.php') ?>
    <h2>Modifier la catégorie</h2>

    <form action="category-save.php" method="post">
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      Nom: <input type="text" name="name" value="<?php echo $_GET['name'] ?>"><br>
      <input type="submit" value="Modifier">
    </form>
  </body>
</html>
