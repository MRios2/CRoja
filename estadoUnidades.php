<?php include("db.php")?>
<?php include("nav.php") ?>

<div class="container p.4" style = "margin-top: 50px">
    <div class="col-md 4">
        <?php if(isset($_SESSION['message'])) { ?>
            <div style="width: 67%" class = "alert alert-<?= $_SESSION['typeMessage']; ?> alert-dismissible fade show" role = "alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>

        <?php session_unset(); } ?>

        <div class="card card-body" style="width: 67%; margin-bottom: 20px">
            <form action="saveCapContinua.php" method = "POST">
            <div style="margin-bottom: 10px" class="form">
                <input style="margin-bottom: 10px" type="text" name = "placa" class = "form-control" placeholder = "Placa"> 
                </div>
                <div class="form-group">
                <input style="margin-bottom: 10px" type="text" name = "descripcion" class = "form-control" placeholder = "Descripcion"> 
                </div>
                <div class="form-group">
                <input style="margin-bottom: 10px" type="number" min="0" max="10" name = "condicion" class = "form-control" placeholder = "Condicion"> 
                </div>
                <div class="form-group">
                    <input style="margin-bottom: 10px" type="date" name = "fecha" class = "form-control" placeholder = "Fecha"> 
                </div>
                <div class="form-group text-center">
                    <input type="submit" class = "btn btn-success btn-block" name = "save_cap" value = "Guardar">
                </div>
                
            </form>


        </div>

    </div>
    <div class="col-md-8">

    <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Descripci&oacute;n</th>
                    <th>Condici&oacute;n</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM estatusunidades";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['placa']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['nivelCondicion']; ?>/10</td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td>
                                    <!-- <a href="editPersonal.php?id=<?php echo $row['id']; ?>" class = "btn btn-secondary">
                                        <i class = "fas fa-marker"></i>
                                    </a> -->
                                    <a href="deleteCapContinua.php?id=<?php echo $row['id']; ?>" class = "btn btn-success">
                                        <i class = "fas fa-check"></i>
                                    </a>
                                </td>
                            </tr>
                    
                   <?php } ?>
            </tbody>
    </table>

    </div>

</div>

 <?php include("footer.php") ?>