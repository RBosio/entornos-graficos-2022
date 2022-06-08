<?php
function insert($ciudad, $pais, $habitantes, $superficie, $tieneMetro){
  include('../database/db.php');

  $query = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', $tieneMetro)";
  
  $conn -> query($query);

  $conn -> close();
}

function update($id, $ciudad, $pais, $habitantes, $superficie, $tieneMetro){
  include('../database/db.php');

  $query = "UPDATE ciudades SET ciudad = '$ciudad', pais = '$pais', habitantes = '$habitantes', superficie = '$superficie', tieneMetro = $tieneMetro WHERE id = $id";
  
  $conn -> query($query);

  $conn -> close();
}

function delete($id){
  include('../database/db.php');

  $query = "DELETE FROM ciudades WHERE id = $id";
  
  $conn -> query($query);

  $conn -> close();
}

?>