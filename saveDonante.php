<?php
include("db.php");

if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO donantespermanentes(nombre, fecha) VALUES('$name', '$fecha')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: donantesPermanentes.php");
   } else {

    $_SESSION['message'] = "Donante resgistrada correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: donantesPermanentes.php");
   }
}

?>