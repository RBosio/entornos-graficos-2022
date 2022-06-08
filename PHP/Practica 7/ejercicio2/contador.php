<?php
if(!isset($_COOKIE["contador"])){
  setcookie("contador", 0, time()+86400*365);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>
<body>
  <?php
    echo $_COOKIE["contador"];
    if($_COOKIE["contador"] == 0){
      setcookie("contador", 1, time()+86400*365);
      ?>
      <h2>Bienvenido a la página!</h2>
    <?php
    } else {
      $contador = $_COOKIE["contador"];
      setcookie("contador", $contador+1, time()+86400*365);
    ?>
    <h2>Cantidad de veces que visitó esta página: <?=$_COOKIE["contador"]?></h2>
  <?php 
    }
  ?>
  <a href="index.php">Regresar al inicio</a>
</body>
</html>