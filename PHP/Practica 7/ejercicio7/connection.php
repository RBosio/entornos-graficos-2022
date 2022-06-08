<?php
try{
  $conn = mysqli_connect("localhost", "fiido", "admin", "Compras");
}catch (Exception $ex){
  throw $ex;
}
?>