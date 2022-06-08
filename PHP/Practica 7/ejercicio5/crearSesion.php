<?php
session_start();

if(isset($_POST["nombre"]) and isset($_POST["pass"])){
  $_SESSION["nombre"] = $_POST["nombre"];
  $_SESSION["pass"] = $_POST["pass"];

  header("Location: index.php");
}
?>