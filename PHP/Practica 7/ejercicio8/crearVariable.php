<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 8</title>
</head>
<body>  
<?php
session_start();

if(isset($_POST["cancion"])){
  try{
    $cancion = $_POST["cancion"];

    $conn = mysqli_connect("localhost", "fiido", "admin", "prueba");

    $result = $conn -> query("SELECT * FROM buscador WHERE canciones LIKE '%$cancion%'");

    $conn -> close();

    if(mysqli_num_rows($result) > 0){
      ?>
      <h3>Listado de canciones:</h3>
      <ul>
      <?php
      while($row = $result -> fetch_assoc()){
      ?>
        <li><?=$row["canciones"]?></li>
      <?php
      }
      ?>
      </ul>
      <?php
    } else {
    ?>
    <h4>No existen canciones similares a ese nombre</h4>
    <?php
    }
  } catch (Exception $ex){
    throw $ex;
  }
}
?>
<a href="index.php">Volver al inicio...</a>
</body>
</html>
