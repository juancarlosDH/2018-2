<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Postea!</title>
  </head>
  <body>
    <form action="redsocial.php" method="post" enctype="multipart/form-data">
      Fecha:<input type="date" name="fecha" value="">
      <br><br>
      Descripcion:
      <textarea name="descripcion" rows="8" cols="80"></textarea>
      <br><br>
      Archivo:
      <input type="file" name="archivo" value="video.mp4">
      <br><br>
      <input type="submit" value="Post it!">
    </form>
  </body>
</html>
