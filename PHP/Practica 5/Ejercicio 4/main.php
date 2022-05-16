<?php

session_start();


if(!isset($_SESSION['paginas_visitadas'])){
  $_SESSION['paginas_visitadas'] = 1;
} else {
  $_SESSION['paginas_visitadas']++;
}

?>

<a href="contacto.php">Contacto</a><br>
<a href="about.php">About</a><br>
<a href="cant_visitas.php">Ver cantidad de visitas</a>