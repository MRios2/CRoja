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

        <div class="card card-body" style="width: 67%; margin-bottom:20px">
            <form action="saveDonativo.php" method = "POST">
                <div class="form-group">
                    <input style="margin-bottom: 10px" type="text" name = "nombre" class = "form-control" placeholder = "Nombre"> 
                </div>
                <div class="form-group">
                    <input style="margin-bottom: 10px" type="text" name = "descripcion" class = "form-control" placeholder = "Descripcion"> 
                </div>
                <div class="form-group">
                   <input style="margin-bottom: 10px"  type="number" min="0" name = "cantidad" class = "form-control" placeholder = "Cantidad"> 
                   </div>
                   <div class="form-group">
                   <input style="margin-bottom: 10px" type="date" name = "fecha" class = "form-control" placeholder = "Fecha"> 
                </div>
                <div class="form-group text-center">
                    <input type="submit" class = "btn btn-success btn-block" name = "save" value = "Guardar">
                </div>
                
            </form>


        </div>

    </div>
    <div class="col-md-8">

    <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM gestiondonativos";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['descripcion'];?></td>
                                <td><?php echo $row['cantidad'];?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td>

                                    <a href="deleteDonativo.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger">
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