<?php
if (isset($_POST['save_user'])) {

    $user = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['confirmPass'];
    $userType = $_POST['userType'];
    $personal = $_POST['idPersonal'];
    
    // if(!isset($_SESSION)){
    //     session_start();
    // } 
    include('db.php');
    if ($password == $password2) {
        $consultUser = "SELECT * FROM usuarios WHERE usuario = '$user' OR personal = '$personal'";
        $resConsult = mysqli_query($conn, $consultUser);
        $rows = mysqli_num_rows($resConsult);
        
        if ($rows) {
            $_SESSION['message'] = "Usuario ya existe.";
            $_SESSION['typeMessage'] = "error";
            header("location: register.php");

        } else {
            $query = "INSERT INTO usuarios(usuario, password, tipoUsuario, id_personal) VALUES ('$user',MD5('$password'), $userType, $personal)";
            $result = mysqli_query($conn, $query);
            
            if(!$result) {
                $_SESSION['message'] = "Error al intentar registrar usuario.";
                $_SESSION['typeMessage'] = "error";
                header("location: register.php");

            } else {
                $_SESSION['message'] = "Usuario registrado.";
                $_SESSION['typeMessage'] = "success";
                header("location: login.php");
            }
        }
    } else {
        $_SESSION['message'] = "Contraseñas no coinciden.";
        $_SESSION['typeMessage'] = "error";
        header("location: register.php");
    }
}
?>
