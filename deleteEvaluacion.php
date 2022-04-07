<?php 
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM evaluacionesgeneracion WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        header("location: evaluaciones.php");
        $_SESSION['message'] = "Error al eliminar.";
        $_SESSION['typeMessage'] = "danger";
    } else {
        header("location: evaluaciones.php");
        $_SESSION['message'] = "Eliminado correctamente.";
        $_SESSION['typeMessage'] = "success";
    }
}



?>