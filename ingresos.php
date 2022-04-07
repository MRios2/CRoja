<?php include("db.php")?>
<?php include("nav.php") ?>

<div class="container p.4" style = "margin-top: 30px">
<div class="text-left" style ="margin-bottom:20px; margin-left: 375px"><h3>Ingresos</h3></div>
    <div class="col-md 4">
        <?php if(isset($_SESSION['message'])) { ?>
            <div class = "alert alert-<?= $_SESSION['typeMessage']; ?> alert-dismissible fade show" role = "alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>

        <?php session_unset(); } ?>

        <div class="card card-body" style = "margin-bottom: 20px; width: 67%">
            <form action="saveIngreso.php" method = "POST">
                <div class="form-group">
                   <input style="margin-bottom:10px;"  type="number" min="0" name = "cantidad" class = "form-control" placeholder = "cantidad"> 
                   </div>
                   <div class="form-group">
                   <input style="margin-bottom:10px;" type="text" name = "motivo" class = "form-control" placeholder = "motivo"> 
                   </div>
                   <div class="form-group">
                   <input style="margin-bottom:10px;" type="date" name = "fecha" class = "form-control" placeholder = "fecha"> 
                </div>
                <div class="form-group text-center">
                    <input style="margin-bottom:10px; width: 100px" type="submit" class = "btn btn-success btn-block" name = "save_ingreso" value = "Guardar">
                </div>
                
            </form>


        </div>

    </div>
    <div class="col-md-8">

    <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Motivo</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM ingresos";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td>$<?php echo $row['cantidad']; ?></td>
                                <td><?php echo $row['motivo'];?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td>

                                    <a href="deleteIngreso.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger">
                                        <i class = "far fa-trash-alt "></i>
                                    </a>
                                </td>
                            </tr>
                    
                   <?php } ?>
            </tbody>
    </table>

    </div>

</div>

 <?php include("footer.php") ?>