<?php include("db.php");
// if(!isset($_SESSION['user'])){
//     header("location:personal.php");
// } 
//else {
//     header("location:login.php");
// }

?>
<?php include("nav.php") ?>

<div class="container p.4" style = "margin-top: 20px">
    <div class="col-md 4">
        <?php if(isset($_SESSION['message'])) { ?>
            <div style = "width: 67%" class = "alert alert-<?= $_SESSION['typeMessage']; ?> alert-dismissible fade show" role = "alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>

        <?php session_unset(); } ?>

        <div class="card card-body" style = "width: 67%; margin-bottom:20px">
            <form action="savePersonal.php" method = "POST">
                <div class="form-group">
                   <input style="margin-bottom: 10px" type="text" name = "name" class = "form-control" placeholder = "nombre(s)"> 
                   </div>
                   <div class="form-group">
                   <input style="margin-bottom: 10px" type="text" name = "plname" class = "form-control" placeholder = "apellido paterno"> 
                   </div>
                   <div class="form-group">
                   <input style="margin-bottom: 10px" type="text" name = "mlname" class = "form-control" placeholder = "apellido materno"> 
                </div>
                <div class="form-group">
                    <input type="submit" class = "btn btn-success btn-block" name = "save_personal" value = "Guardar">
                </div>
                
            </form>


        </div>

    </div>
    <div class="col-md-8">

    <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>Nombre(s)</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM personal";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['nombres']; ?></td>
                                <td><?php echo $row['apellidoP'];?></td>
                                <td><?php echo $row['apellidoM']; ?></td>
                                <td>
                                    <a href="editPersonal.php?id=<?php echo $row['id']; ?>" class = "btn btn-secondary">
                                        <i class = "fas fa-marker"></i>
                                    </a>
                                    <a href="deletePersonal.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger">
                                        <i class = "far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                    
                   <?php } ?>
            </tbody>
    </table>

    </div>

</div>

 <?php include("footer.php") ?>