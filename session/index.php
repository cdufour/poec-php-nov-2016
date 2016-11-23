<?php session_start() ?>

<?php
  $client = "Aramis";
  $menu = "
  <nav>
    <ul>
      <li><a href='page1.php'>Page 1</a></li>
      <li><a href='page2.php'>Page 2</a></li>
      <li><a href='deconnexion.php'>Deconnexion</a></li>
    </ul>
  </nav>";

  echo $menu;
  echo $client;

  $_SESSION["client"] = $client;

 ?>
