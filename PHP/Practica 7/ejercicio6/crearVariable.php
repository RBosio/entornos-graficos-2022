<?php
session_start();

if(isset($_POST["mail"])){
  try{
    $mail = $_POST["mail"];

    $conn = mysqli_connect("localhost", "fiido", "admin", "base2");

    $result = $conn -> query("SELECT * FROM alumnos WHERE mail = '$mail'");

    $conn -> close();

    if(mysqli_num_rows($result) == 1){
      $row = $result -> fetch_assoc();
      $_SESSION["nombre"] = $row["nombre"];
    }
  } catch (Exception $ex){
    throw $ex;
  }

  header("Location: index.php");
}
?>