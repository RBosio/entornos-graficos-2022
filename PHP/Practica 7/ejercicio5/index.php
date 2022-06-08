<?php
include_once('./getVariables.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 5</title>
</head>
<body>
  <form action="crearSesion.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">
    <label for="pass">Contraseña:</label>
    <input type="password" name="pass">
    <input type="submit" value="Enviar">
  </form>
  <?php
  $variables = getVariables();

  if(count($variables) > 0){
  ?>
  <div>
    <p>Nombre: <?=$variables[0]?></p>
    <p>Contraseña: <?=$variables[1]?></p>
  </div>
  <?php
  }
  ?>
</body>
</html>