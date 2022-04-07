<?php
include("db.php");

if(isset($_POST['save_cap'])) {
    $name = $_POST['name'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO capacitacioncontinua(nombre, descripcion, fecha) VALUES('$name', '$descripcion', '$fecha')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: capacitacionContinua.php");
   } else {

    $_SESSION['message'] = "Capacitacion resgistrada correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: capacitacionContinua.php");
   }
}

?>