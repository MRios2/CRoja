<?php
$user = $_POST['user'];
$password = $_POST['password'];

   if(!isset($_SESSION)){
        session_start();
    }
    
    include('db.php');

    $_SESSION['user'] = $user;

    $query = "SELECT * FROM usuarios WHERE usuario = '$user' AND password =  MD5('$password')";

    $result = mysqli_query($conn, $query);

    $rows = mysqli_num_rows($result);

    if($rows) {
        header("location: dashboard.php");

    } else {
        header("location:login.php");
    }

?>

