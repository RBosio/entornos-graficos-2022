<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
</head>
<body>
  <?php  
  if(isset($_COOKIE["nombre"])){
  ?>
  <h3>Bienvenido <?=$_COOKIE["nombre"]?>!</h3>
  <?php
  }
  ?>
  <form action="setNombre.php">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <input type="submit">
  </form>
</body>
</html>