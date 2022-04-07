<?php
include("db.php");

if(isset($_POST['save'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO gestiondonativos(nombre, descripcion, cantidad, fecha) VALUES('$nombre', '$descripcion', '$cantidad', '$fecha')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: donativos.php");
   } else {

    $_SESSION['message'] = "Gasto operativo resgistrado correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: donativos.php");
   }
}

?>