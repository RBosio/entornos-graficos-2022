<?php
session_start();
include('./connection.php');


if(isset($_GET["id"]) and $_GET["o"] == 'a'){
  $id = $_GET["id"];
  if(!isset($_SESSION["id"])){
    $_SESSION["id"] = array();
    $carro = $_SESSION["id"];
    array_push($carro, $_GET["id"]);

    $_SESSION["id"] = $carro;
  } else {
    $_SESSION["id"][count($_SESSION["id"])] = $id;
  }
} elseif(isset($_GET["id"]) and $_GET["o"] == 'e') {
  $key = array_search($_GET["id"], $_SESSION["id"]);

  $_SESSION["id"][$key] = 0;
}

header("Location: index.php");
?>