<?php

session_start();


if(!isset($_SESSION['paginas_visitadas'])){
  $_SESSION['paginas_visitadas'] = 1;
} else {
  $_SESSION['paginas_visitadas']++;
}

?>

<h2>About</h2>

<a href="main.php">Volver</a>