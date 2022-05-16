<?php
$destinatario = "roccobosio@gmail.com";
$asunto = "Prueba";
$cuerpo = "<h1>Esto es una prueba de envío de correo a través del servidor</h1>";
$headers .= "Content-type: text/html; charset=iso-8859-1";
mail($destinatario, $asunto, $cuerpo, $headers)
?>