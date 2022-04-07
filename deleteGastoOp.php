<?php 
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM gastooperativo WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        header("location: gastoOp.php");
        $_SESSION['message'] = "Error al eliminar.";
        $_SESSION['typeMessage'] = "danger";
    } else {
        header("location: gastoOp.php");
        $_SESSION['message'] = "Eliminado correctamente.";
        $_SESSION['typeMessage'] = "success";
    }
}



?>