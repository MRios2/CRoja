<?php
include("db.php");

if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO evaluacionesgeneracion(nombre, descripcion, fecha) VALUES('$name', '$descripcion', '$fecha')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: evaluaciones.php");
   } else {

    $_SESSION['message'] = "Evaluacion resgistrada correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: evaluaciones.php");
   }
}

?>