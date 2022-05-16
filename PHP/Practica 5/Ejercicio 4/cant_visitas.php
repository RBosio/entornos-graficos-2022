<?php
session_start();
?>
<html>
<body>
<a href="cuenta.php"></a>
<?php
echo "Has visitado ".($_SESSION["paginas_visitadas"])." páginas";
?>
<br>
<br>
<a href="main.php">Volver</a>
</body>
</html>