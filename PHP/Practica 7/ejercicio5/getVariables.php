<?php
session_start();

function getVariables(){
  $variables = array();

  if(isset($_SESSION["nombre"]) and isset($_SESSION["pass"])){
    $variables[0] = $_SESSION["nombre"];
    $variables[1] = $_SESSION["pass"];
  }

  return $variables;
}
?>