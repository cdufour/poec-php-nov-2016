<?php
session_start();
require('util.inc.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formation PHP</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php
      if (isUserConnected()) {
        echo $_SESSION["connected_user"] .
        " <a href='logout.php'>(deconnexion)</a>";
        $class = "hide";
      } else {
        $class = "";
      }
    ?>
    <h1>Identification sans ajax</h1>

    <form class="<?php echo $class ?>"
      action="login.php" method="post">
      Email<input type="text" name="email">
      Mot de passe <input type="text" name="password">
      <input type="submit">
    </form>

    <nav>
      <ul>
        <li><a href="page1.php">Page 1</a></li>
        <li><a href="page2.php">Page 2</a></li>
      </ul>
    </nav>

  </body>
</html>
