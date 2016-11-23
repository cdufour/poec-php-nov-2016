<?php
function isUserConnected() {
  return isset($_SESSION["connected_user"]);
}
?>
