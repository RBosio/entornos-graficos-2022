<?php
session_start();

include_once('../model/ciudad.php');

if(isset($_POST["btn-agregar"])){
  $ciudad = $_POST["ciudad"];
  $pais = $_POST["pais"];
  $habitantes = $_POST["habitantes"];
  $superficie = $_POST["superficie"];
  $tieneMetro = $_POST["tieneMetro"] == '1' ? 1 : 0;

  insert($ciudad, $pais, $habitantes, $superficie, $tieneMetro);

  $_SESSION["message"] = "Ciudad agregada correctamente";
  $_SESSION["color-message"] = "success"; 

  header("Location: ../index.php");
}

if(isset($_POST["btn-editar"])){
  $id = $_POST["id"];
  $ciudad = $_POST["ciudad"];
  $pais = $_POST["pais"];
  $habitantes = $_POST["habitantes"];
  $superficie = $_POST["superficie"];
  $tieneMetro = $_POST["tieneMetro"] == '1' ? 1 : 0;

  update($id, $ciudad, $pais, $habitantes, $superficie, $tieneMetro);

  $_SESSION["message"] = "Ciudad actualizada correctamente";
  $_SESSION["color-message"] = "info"; 

  header("Location: ../index.php");
}

if(isset($_POST["btn-eliminar"])){
  $id = $_POST["id"];

  delete($id);

  $_SESSION["message"] = "Ciudad eliminada correctamente";
  $_SESSION["color-message"] = "danger"; 

  header("Location: ../index.php");
}

?>