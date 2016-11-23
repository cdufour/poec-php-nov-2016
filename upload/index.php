<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload PHP</title>
  </head>
  <body>

    <form action="upload.php"
      enctype="multipart/form-data" method="post">
      <input type="file" name="fichier">
      <input type="hidden" name="test" value="ok">
      <input type="submit" value="Upload">
    </form>

  </body>
</html>
