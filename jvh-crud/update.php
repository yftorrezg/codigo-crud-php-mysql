<?php

    include("conexion.php");
    $con = conectar();

    //! RECIBIENDO LOS DATOS DEL FORMULARIO DE ACTUALIZAR
    $cod_estudiante = $_POST['cod_estudiante'];
    $dni = $_POST['dni'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    // ! MODIFICAR DATOS
    $sql = "UPDATE alumno SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
    $query = mysqli_query($con, $sql);

    if ($query) {  
            Header("Location: alumno.php"); 
        }
?>