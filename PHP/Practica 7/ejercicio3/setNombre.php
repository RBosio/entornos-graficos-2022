<?php
  if(isset($_GET["nombre"])){
    setcookie("nombre", $_GET["nombre"], time()+86400*365);
  }

  header("Location: index.php");
?>