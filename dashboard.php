<?php include("db.php")?>
<?php include("nav.php") ?>
<html>

<head>
    <title>Cruz roja</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
</head>
<style>
.caja {
    margin: auto;
    max-width: 250px;
    padding: 20px;
    border: 1px solid #BDBDBD;
}

.caja select {
    width: 100%;
    font-size: 16px;
    padding: 5px;
}

.resultados {
    margin: 20px;
    margin-top: 40px;
    width: 95%;
    float: left;
}
</style>
<div style="display: table; clear: both;">
    <div style="float: left; width: 50%;">
        <div class="text-center" style="margin-top: 15px;; margin-left: 0px">
            <h2> Ingresos de noviembre</h2>
        </div>
        <div class="resultados"><canvas id="graficoIngresos"></canvas></div>
        <div style="width:100%">
            <?php
            $query = "SELECT SUM(cantidad) as total FROM `ingresos` WHERE MONTH(fecha) = 11";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){ 
            $totalIngresos = $row['total'] ?>

            <div class="text-center" style="margin-bottom: 10px">Total: $<?php echo $row['total'] ?></div>
            <?php } ?>
            <?php
            $query = "SELECT objetivo FROM `objetivos` WHERE idmodulo = 1";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){ 
            $estimacionIngresos = $row['objetivo']    ?>

            <div class="text-center" style="margin-bottom: 10px">Estimaci&oacute;n: $<?php echo $row['objetivo'] ?>.00
            </div>
            <?php } ?>

            <?php
                if($totalIngresos >= $estimacionIngresos) { ?>
            <div class="text-center" style="background-color: rgba(91,228,146,0.5) ">Ingresos dentro de lo estimado.
            </div>
            <?php } else { ?>
            <div class="form-group text-center"><a href="reportes.php">Realizar reporte</a></div>
            <?php } ?>
        </div>
    </div>
    <div style="float: left; width: 50%;">

        <div class="text-center" style="margin-top: 15px;; margin-left: 0px">
            <h2> Gastos de noviembre</h2>
        </div>
        <div class="resultados"><canvas id="graficoGastos"></canvas></div>
        <div style="width:100%">
        <?php
            $query = "SELECT SUM(cantidad) as total FROM `gastooperativo` WHERE MONTH(fecha) = 11";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){ 
            $totalGastos = $row['total']    ?>

        <div class="text-center" style="margin-bottom: 10px">Total: $<?php echo $row['total'] ?></div>
        <?php } ?>

        <?php
            $query = "SELECT objetivo FROM `objetivos` WHERE idmodulo = 2";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)){
            $estimacionGastos = $row['objetivo']     ?>

        <div class="text-center" style="margin-bottom: 10px">Estimaci&oacute;n: $<?php echo $row['objetivo'] ?>.00</div>
        <?php } ?>

        <?php
                if($totalGastos <= $estimacionGastos) { ?>
        <div class="text-center" style="background-color: rgba(91,228,146,0.5) ">Gastos operativos dentro de lo
            estimado.</div>
        <?php } else { ?>
        <div class="form-group text-center"><a href="reportes.php">Realizar reporte</a></div>
        <?php } ?>
        </div>
    </div>
</div>
</body>
<script>
var Datos = {
    labels: [
        <?php
                                            $sql = "SELECT DISTINCT DAY(fecha) AS 'day' FROM `ingresos` WHERE MONTH(fecha) = 11 ORDER BY DAY(fecha)";
                                            $result = mysqli_query($conn,$sql);
                                            while($registros = mysqli_fetch_array($result)){
                                            ?>
        <?php echo $registros["day"]?>,
        <?php
                                            }

                                        ?>
    ],
    datasets: [{
            fillColor: 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
            strokeColor: 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
            highlightFill: 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
            highlightStroke: 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
            data: [
                <?php
                                            $sql = "SELECT fecha, SUM(cantidad) as cant FROM `ingresos` GROUP BY fecha";
                                            $result = mysqli_query($conn,$sql);
                                            while($registros = mysqli_fetch_array($result)){
                                            ?>
                <?php echo $registros["cant"]?>,
                <?php
                                            }

                                        ?>

            ],

        },

    ]

}

var contexto = document.getElementById('graficoIngresos').getContext('2d');
window.Barra = new Chart(contexto).Bar(Datos, {
    responsive: true
});
</script>

<script>
var Datos = {
    labels: [
        <?php
                $sql = "SELECT DISTINCT DAY(fecha) AS 'day' FROM `gastooperativo` WHERE MONTH(fecha) = 11 ORDER BY DAY(fecha)";
                $result = mysqli_query($conn,$sql);
                while($registros = mysqli_fetch_array($result)){
                ?>
        <?php echo $registros["day"]?>,
        <?php
                }

            ?>
    ],
    datasets: [{
            fillColor: 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
            strokeColor: 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
            highlightFill: 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
            highlightStroke: 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
            data: [
                <?php
                $sql = "SELECT fecha, SUM(cantidad) as cant FROM `gastooperativo` GROUP BY fecha";
                $result = mysqli_query($conn,$sql);
                while($registros = mysqli_fetch_array($result)){
                ?>
                <?php echo $registros["cant"]?>,
                <?php
                }

            ?>

            ],

        },

    ]

}

var contexto = document.getElementById('graficoGastos').getContext('2d');
window.Barra = new Chart(contexto).Bar(Datos, {
    responsive: true
});
</script>
<?php include("footer.php") ?>