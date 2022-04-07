<?php
include("db.php");

if(isset($_POST['save_personal'])) {
    $name = $_POST['name'];
    $plname = $_POST['plname'];
    $mlname = $_POST['mlname'];

    $query = "INSERT INTO personal(nombres, apellidoP, apellidoM) VALUES('$name', '$plname', '$mlname')";

   $result =  mysqli_query($conn, $query);

   if(!$result) {
    $_SESSION['message'] = "Ha ocurrido un error.";
    $_SESSION['typeMessage'] = "danger";
        header("location: personal.php");
   } else {

    $_SESSION['message'] = "Personal resgistrado correctamente.";
    $_SESSION['typeMessage'] = "success";
       header("location: personal.php");
   }
}

?>