<?php
session_start();

if(!isset($_SESSION["color"])){
  $_SESSION["color"] = "default";
} else {
  if(isset($_GET["color"])){
    $_SESSION["color"] = $_GET["color"];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1</title>
  <link rel="stylesheet" href="css/<?=$_SESSION["color"]?>.css">
</head>
<body>
  <form action="index.php">
    <label for="">Color de fondo:</label>
    <select name="color">
      <option value="rojo">Rojo</option>
      <option value="verde">Verde</option>
      <option value="azul">Azul</option>
    </select>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>