<?php
include("db.php");

if(isset($_POST['save'])) {
    $placa = $_POST['placa'];
    $descripcion = $_POST['descripcion'];
    $condicion = $_POST['condicion'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO estatusunidades(placa, descripcion, nivelCondicion, fecha, estado) VALUES('$placa', '$descripcion', '$condicion', '$fecha', 1)";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: unidades.php");
   } else {

    $_SESSION['message'] = "Estado de unidad resgistrada correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: unidades.php");
   }
}

?>