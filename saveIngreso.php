<?php
include("db.php");

if(isset($_POST['save_ingreso'])) {
    $cantidad = $_POST['cantidad'];
    $motivo = $_POST['motivo'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO ingresos(cantidad, motivo, fecha) VALUES('$cantidad', '$motivo', '$fecha')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: ingresos.php");
   } else {

    $_SESSION['message'] = "Ingreso resgistrado correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: ingresos.php");
   }
}

?>