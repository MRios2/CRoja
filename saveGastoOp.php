<?php
include("db.php");

if(isset($_POST['save'])) {
    $cantidad = $_POST['cantidad'];
    $motivo = $_POST['motivo'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO gastooperativo(cantidad, motivo, fecha) VALUES('$cantidad', '$motivo', '$fecha')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: gastoOp.php");
   } else {

    $_SESSION['message'] = "Gasto operativo resgistrado correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: gastoOp.php");
   }
}

?>