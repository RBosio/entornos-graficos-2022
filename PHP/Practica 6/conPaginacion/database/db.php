<?php
try{
  $conn = mysqli_connect("localhost", "fiido", "admin", "Capitales");
}
catch(Exception $ex){
  die($ex);
}
?>