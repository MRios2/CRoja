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

        <div class="text-center">
            <h4>Reportes</h4>
        </div>
        <div class="card card-body" style="width: 100%; margin-bottom:40px;  display: table; clear: both;">
            <div style="float: left; width: 50%; padding: 10px;">

                <div class="form-group">

                    <select style="margin-bottom:18px;" class="form-select" onChange="mesSelected(this.value);">

                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>

                    </select>
                </div>
                <div style = "display: table; clear: both; width: 100%">
                <div class="form-group" style="float: left; width: 50%;">
                    <input style="margin-bottom:18px;" type="number" min="0" name="objetive" class="form-control"
                        placeholder="Objetivo">
                </div>
                <div class="form-group" style="float: left; width: 50%; padding-left: 10px">
                    <input style="margin-bottom:18px;" type="number" min="0" name="cumplimiento" class="form-control"
                        placeholder="Cumplimiento">
                </div>
                </div>
                <div class="form-group">
                    <select style="margin-bottom:18px;" class="form-select" onChange="mesSelected(this.value);"
                        placeholder="Modulo">
                        <option value="" selected disabled>Modulo</option>

                    </select>
                </div>
                <div class="form-group">

                    <select style="margin-bottom:10px;" class="form-select" onChange="mesSelected(this.value);"
                        placeholder="Responsable">
                        <option value="" selected disabled>Responsable</option>

                    </select>
                </div>
            </div>
            <div style="float: left; width: 50%; padding: 10px;">
                <form action="savePersonal.php" method="POST">
                    <div class="form-group">
                        <input style="margin-bottom: 10px" type="date" name="name" class="form-control"
                            placeholder="fecha">
                    </div>
                    <div class="form-group">
                        <textArea style="margin-bottom: 10px" type="text" name="mlname" class="form-control"
                            placeholder="Descripci&oacute;n del problema"></textArea>
                    </div>
                    <div class="form-group">
                        <input style="margin-bottom: 10px" type="text" name="name" class="form-control"
                            placeholder="Causa ra&iacute;z">
                    </div>
                    <div class="form-group">
                        <input style="margin-bottom: 10px" type="text" name="name" class="form-control"
                            placeholder="Acciones">
                    </div>

            </div>

            <div class="form-group text-center">
                <input type="submit" class="btn btn-success btn-block" name="save_personal" value="Guardar">
            </div>

            </form>


        </div>

    </div>
    <div class="col-md-8" style="width: 100%;">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Modulo</th>
                    <th>Responsable</th>
                    <th>Descrici&oacute;n</th>
                    <th>Causa ra&iacute;z</th>
                    <th>Acciones</th>
                    <th>Estado</th>
                    <th>Completar</th>


                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT fecha, modulos.nombre as 'modulo', personal.nombres as 'responsable', descripcion, causaRaiz, acciones FROM `infoproblema` INNER JOIN modulos on modulos.id = idmodulo INNER JOIN personal on personal.id = idResponsable WHERE estatus = 1";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['modulo'];?></td>
                    <td><?php echo $row['responsable']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['causaRaiz']; ?></td>
                    <td><?php echo $row['acciones']; ?></td>
                    <td>Activo</td>


                    <td>
                        <!-- <a  class="btn btn-secondary">
                             href="editPersonal.php?id=<?php echo $row['id']; ?>"
                            <i class="fas fa-marker"></i>
                        </a> -->
                        <a  class="btn btn-success">
                        <!-- href="deletePersonal.php?id=<?php echo $row['id']; ?>" -->
                            <i class="fas fa-check"></i>
                        </a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>

</div>

<?php include("footer.php") ?>