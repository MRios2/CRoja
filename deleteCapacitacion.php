<?php 
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM credencializacion WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        header("location: credencializacion.php");
        $_SESSION['message'] = "Error al eliminar.";
        $_SESSION['typeMessage'] = "danger";
    } else {
        header("location: credencializacion.php");
        $_SESSION['message'] = "Eliminado correctamente.";
        $_SESSION['typeMessage'] = "success";
    }
}



?>