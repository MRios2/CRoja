<?php 

include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM personal WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) { 
        $row = mysqli_fetch_array($result);
        $name = $row['nombres'];
        $plname = $row['apellidoP'];
        $mlname = $row['apellidoM'];
    }
}
    if(isset($_POST['updatePersonal'])) {
        $id = $_GET['id'];
        $name = $POST['name'];
        $plname = $POST['plname'];
        $mlname = $POST['mlname'];

        $query = "UPDATE personal SET nombres = '$name', apellidoP = '$plname', apellidoM = '$mlname' WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            $_SESSION['message'] = "Error al editar.";
            $_SESSION['typeMessage'] = "danger";
            header("location: personal.php");
        } else {
            $_SESSION['message'] = "Editado correctamente.";
            $_SESSION['typeMessage'] = "success";
            header("location: personal.php");
        }
    }

    include("nav.php");
        ?>
<div class="container" style = "margin-top: 75px">
    <div class="text-center"><h3>Editar datos de personal</h3></div>
    <div class="row">

        <div class="col-md-4 mx-auto">

        <div class="card card-body">
            <form action="editPersonal.php?id=<?php echo $_GET['id']; ?>" method = "POST">
                <div class="form-group">
                   <input style="margin-bottom: 10px" type="text" name = "name" value = "<?php echo $name; ?>" class = "form-control" placeholder = "nombre(s)" > 
                   </div>
                   <div class="form-group">
                   <input style="margin-bottom: 10px" type="text" name = "plname" value = "<?php echo $plname; ?>" class = "form-control" placeholder = "apellido paterno"> 
                   </div>
                   <div class="form-group">
                   <input style="margin-bottom: 10px" type="text" name = "mlname" value = "<?php echo $mlname; ?>" class = "form-control" placeholder = "apellido materno"> 
                </div>
                <div class="form-group text-center">
                    <input style="width: 100px" type="submit" class = "btn btn-success btn-center btn-block" name = "updatePersonal" value = "Editar">
                </div>
                
            </form>


        </div>  
        </div>
    </div>
</div>
   <?php include("footer.php"); ?>