<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>
<body>
  <h1>Titulares</h1>
  <?php
  if(!isset($_COOKIE["titular"])){
  ?>
    <h3>Noticia Política</h3>
    <h3>Noticia Económica</h3>
    <h3>Noticia Deportiva</h3>
  <?php
  } else {
  ?>
    <h3>Noticia <?=$_COOKIE["titular"]?></h3>
  <?php
  }
  ?>
  <form action="titular.php">
    <label>Noticia política</label>
    <input type="radio" name="titular" value="Política"><br>
    <label>Noticia económica</label>
    <input type="radio" name="titular" value="Económica"><br>
    <label>Noticia deportiva</label>
    <input type="radio" name="titular" value="Deportiva"><br>
    <input type="submit" value="Enviar">
  </form>

  <a href="borrarCookie.php">Borrar cookie</a>
</body>
</html>