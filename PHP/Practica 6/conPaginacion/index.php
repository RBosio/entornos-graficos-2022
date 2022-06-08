<?php
session_start();

include('./includes/header.php');
?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-body">
        <form action="controllers/ciudad.php" method="POST">
          <div class="form-group">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input required type="text" class="form-control" name="ciudad">
          </div>
          <div class="form-group">
            <label for="pais" class="form-label">País:</label>
            <input required type="text" class="form-control" name="pais">
          </div>
          <div class="form-group">
            <label for="habitantes" class="form-label">Habitantes:</label>
            <input required type="text" class="form-control" name="habitantes">
          </div>
          <div class="form-group">
            <label for="superficie" class="form-label">Superficie:</label>
            <input required type="text" class="form-control" name="superficie">
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
            <input type="submit" value="Agregar" class="btn btn-success" name="btn-agregar">
          </div>
        </form>
      </div>
      <?php
      if(isset($_SESSION["message"])){
        ?>
        <div class="alert alert-<?=$_SESSION["color-message"]?> alert-dismissible fade show mt-3" role="alert">
          <?=$_SESSION["message"]?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
      }
      session_unset();
      ?>
    </div>
    <div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ciudad</th>
            <th scope="col">País</th>
            <th scope="col">Habitantes</th>
            <th scope="col">Superficie</th>
            <th scope="col">Tiene metro</th>
            <th scope="col">Operaciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include('./database/db.php');
          
          $resultCont = $conn -> query("SELECT COUNT(*) cont FROM ciudades");
          $row = mysqli_fetch_assoc($resultCont);
          $cantReg = $row["cont"];
          $cantPag = ceil($cantReg / 5);

          $numPag = isset($_GET["numPag"]) ? $_GET["numPag"] : 0;
          $numPag *= 5;
          
          $result = $conn -> query("SELECT * FROM ciudades LIMIT $numPag, 5");
          
          $conn -> close();
          
          while($row = mysqli_fetch_assoc($result)){          
          ?>
            <tr>
              <th scope="row"><?=$row["id"]?></th>
              <td><?=$row["ciudad"]?></td>
              <td><?=$row["pais"]?></td>
              <td><?=$row["habitantes"]?></td>
              <td><?=$row["superficie"]?></td>
              <td><?=$row["tieneMetro"]?></td>
              <td>
                <div class="btn-group">
                  <a href="views/ciudad/edit.php?id=<?=$row["id"]?>" class="btn btn-info">Editar</a>
                  <a href="views/ciudad/delete.php?id=<?=$row["id"]?>" class="btn btn-danger">Eliminar</a>
                </div>
              </td>
              
            </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <?php
          for($i=0; $i<$cantPag; $i++){
          ?>
              <li class="page-item"><a class="page-link" href="index.php?numPag=<?=$i?>"><?=$i+1?></a></li>
              <?php
          }
          ?>
        </ul>
      </nav>
    </div>
  </div>
</div>

<?php
include('./includes/footer.php');
?>