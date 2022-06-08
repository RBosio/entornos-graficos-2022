<?php
include('../../includes/header.php');
include('../../database/db.php');

$id = $_GET["id"];
$query = "SELECT * FROM ciudades WHERE id = $id";

$result = $conn -> query($query);

if(mysqli_num_rows($result) == 0){
  header("Location: ../../index.php");
} else {
  $result -> data_seek(0);
  $row = $result -> fetch_assoc();
?>  
  <div class="container p-4">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <h2 class="text-center">Editar ciudad</h2>
        <div class="card card-body">
          <form action="../../controllers/ciudad.php" method="POST">
            <input type="hidden" name="id" value="<?=$row["id"]?>">
            <div class="form-group">
              <label for="ciudad" class="form-label">Ciudad:</label>
              <input required type="text" class="form-control" name="ciudad" value="<?=$row["ciudad"]?>">
            </div>
            <div class="form-group">
              <label for="pais" class="form-label">País:</label>
              <input required type="text" class="form-control" name="pais" value="<?=$row["pais"]?>">
            </div>
            <div class="form-group">
              <label for="habitantes" class="form-label">Habitantes:</label>
              <input required type="text" class="form-control" name="habitantes" value="<?=$row["habitantes"]?>">
            </div>
            <div class="form-group">
              <label for="superficie" class="form-label">Superficie:</label>
              <input required type="text" class="form-control" name="superficie" value="<?=$row["superficie"]?>">
            </div>
            <div class="form-group mt-2">
              <label for="tieneMetro" class="form-label">Tiene metro:</label>
              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="tieneMetro" id="btnradio1" autocomplete="off" value="1" checked>
                <label class="btn btn-outline-success" for="btnradio1">Si</label>
                <input type="radio" class="btn-check" name="tieneMetro" id="btnradio2" autocomplete="off" value="0">
                <label class="btn btn-outline-success" for="btnradio2">No</label>
              </div>
            </div>
            <div class="d-grid mt-3">
              <input type="submit" value="Editar" class="btn btn-success" name="btn-editar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
}
include('../../includes/footer.php')
?>