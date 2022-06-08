<?php
if(isset($_GET["titular"])){
  setcookie("titular", $_GET["titular"], time()+86400*365);

  header("Location: index.php");
}
?>