<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 7</title>
</head>
<body>
  <?php
  session_start();

  include('./connection.php');
  
  if(isset($_SESSION["id"])){
    $carrito = $_SESSION["id"];
  } else {
    $carrito = array();
  }

  $result = $conn -> query("SELECT * FROM catalogo");

  while($row = $result -> fetch_assoc()){
  ?>
  <div>
    <h4>Nombre producto: <?=$row["producto"]?></h4>
    <p>Precio: <?=$row["precio"]?></p>
    <a href="carrito.php?id=<?=$row["id"]?>&o=a">Agregar al carrito</a>
  </div>
  <?php
  }
  ?>
  
  <h3>Carrito de compras:</h3>
  <?php
  $result2 = $conn -> query("SELECT * FROM catalogo");
  while($row = $result2 -> fetch_assoc()){
    if(in_array($row["id"], $_SESSION["id"])){
    ?>
    <div>
      <h4>Nombre producto: <?=$row["producto"]?></h4>
      <p>Precio: <?=$row["precio"]?></p>
      <a href="carrito.php?id=<?=$row["id"]?>&o=e">Quitar del carrito</a>
    </div>
    <?php
    }
  }
  ?>
  <div>
  </div>
</body>
</html>