<?php
  include("conexion.php");
  $con = conectar();

  $id = $_GET['id']; // ? r: se obtiene el id del alumno a actualizar, desde la url de la página alumno.php

  $sql = "SELECT * FROM alumno WHERE cod_estudiante='$id'";
  $query = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <title>Actualizar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
  <div class="container mt-5">
    <div class="row">

      <div class="col-4"></div>
      <div class="col-4 mt-5">
        <h1>Actualizar datos</h1>

        <form action="update.php" method="POST"> <!-- IMPORTANT  -->

          <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">

          <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
          <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres"
            value="<?php echo $row['nombres']  ?>">
          <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos"
            value="<?php echo $row['apellidos']  ?>">

          <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
      </div>
      <div class="col-4"></div>

    </div>

  </div>
</body>

</html>