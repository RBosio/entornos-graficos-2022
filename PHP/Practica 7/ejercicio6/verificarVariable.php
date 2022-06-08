<?php
session_start();

if(isset($_SESSION["nombre"])){
?>
<h3>Bienvenido <?=$_SESSION["nombre"]?>!</h3>
<?php
} else {
?>
<h3>No puede visitar esta página!</h3>
<a href="index.php">Regrese al inicio...</a>
<?php
}
?>