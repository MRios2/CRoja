<?php 
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM donantespermanentes WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        header("location: donantesPermanentes.php");
        $_SESSION['message'] = "Error al eliminar.";
        $_SESSION['typeMessage'] = "danger";
    } else {
        header("location: donantesPermanentes.php");
        $_SESSION['message'] = "Eliminado correctamente.";
        $_SESSION['typeMessage'] = "success";
    }
}



?>