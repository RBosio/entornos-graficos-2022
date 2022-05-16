<?php
$destino=$_POST['destino'];
$asunto="Recomendación del sitio zzz";
$desde='From:' .$_POST['email'];
$comentario= "
$_POST[texto]
";
mail($destino,$asunto,$comentario,$desde);
?>