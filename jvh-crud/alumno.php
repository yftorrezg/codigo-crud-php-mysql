<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM alumno";
$query = mysqli_query($con, $sql); # ejecuta la consulta sql y la guarda en la variable query.

$row = mysqli_fetch_array($query); # ? seleciona todo de la consulta sql y lo guarda en la variable row.   
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title> PAGINA ALUMNO</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="row">

      <div class="col-md-3">
        <h1>Nueva novia?</h1>

        <form action="insertar.php" method="POST">

          <!-- aqui se ve el NAME -->
          <input type="text" class="form-control mt-4" name="numero" placeholder="codigo">
          <input type="text" class="form-control mt-4" name="dni" placeholder="Dni">
          <input type="text" class="form-control mt-4" name="nombres" placeholder="Nombres">
          <input type="text" class="form-control mt-4 mb-4" name="apellidos" placeholder="Apellidos">

          <input type="submit" class="btn btn-primary">
        </form>

      </div>

      <div class="col-md-9">
        <table class="table">
          <thead class="table-success table-striped">
            <tr>
              <th>Codigo</th>
              <th>Dni</th>
              <th>Nombres</th>
              <th>pellidos</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <!-- //? aqui se ve el echo de la variable row que es la que tiene la consulta sql y la variable que se le asigno. -->
              <tr>
                <th><?php echo $row['cod_estudiante'] ?></th>
                <th><?php echo $row['dni'] ?></th>
                <th><?php echo $row['nombres'] ?></th>
                <th><?php echo $row['apellidos'] ?></th>
                <th>
                  <a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">
                    Editar
                  </a>
                </th>
                <th>
                  <a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a>
                </th>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>