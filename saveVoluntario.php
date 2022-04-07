<?php
include("db.php");

if(isset($_POST['save_personal'])) {
    $name = $_POST['name'];
    $plname = $_POST['plname'];
    $mlname = $_POST['mlname'];
    $fecha = getdate();

    $query = "INSERT INTO voluntariosactivos(nombres, apellidoP, apellidoM, fecha) VALUES('$name', '$plname', '$mlname', '$fecha')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: voluntarios.php");
   } else {

    $_SESSION['message'] = "Voluntario resgistrado correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: Voluntarios.php");
   }
}

?>