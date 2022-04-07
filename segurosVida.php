<?php include("db.php");
// if(!isset($_SESSION['user'])){
//     header("location:personal.php");
// } 
//else {
//     header("location:login.php");
// }

?>
<?php include("nav.php") ?>

<div class="container p.4" style="margin-top: 20px">
    <div class="col-md 4">
        <?php if(isset($_SESSION['message'])) { ?>
        <div style="width: 67%" class="alert alert-<?= $_SESSION['typeMessage']; ?> alert-dismissible fade show"
            role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>

        <?php session_unset(); } ?>

        <div class="card card-body" style="width: 67%; margin-bottom:20px">
            <form action="savePersonal.php" method="POST">
                <div style="margin-bottom: 10px" class="form">
                    <select class="form-select" onChange="mesSelected(this.value);">
                        <option value="" selected disabled>Nombre de personal</option>

                    </select>
                </div>
                <div style="margin-bottom: 10px" class="form-group">
                   <input style="margin-bottom:10px;" type="date" name = "fecha" class = "form-control" placeholder = "Fecha inicial"> 
                </div>
                <div style="margin-bottom: 10px" class="form-group">
                   <input style="margin-bottom:10px;" type="date" name = "fecha" class = "form-control" placeholder = "Fecha final"> 
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-success btn-block" name="save_personal" value="Guardar">
                </div>

            </form>


        </div>

    </div>
    <div class="col-md-8">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre(s)</th>
                    <th>Fecha inicial</th>
                    <th>Fecha final</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM segurosvida";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['id_personal']; ?></td>
                    <td><?php echo $row['fechaInicio'];?></td>
                    <td><?php echo $row['fechaFin']; ?></td>
                    <td>
                        <a href="editPersonal.php?id=<?php echo $row['id']; ?>" class="btn btn-success">
                            <i class="fas fa-check"></i>
                        </a>
                        <!-- <a href="deletePersonal.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger">
                                        <i class = "far fa-trash-alt"></i>
                                    </a> -->
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>

</div>

<?php include("footer.php") ?>