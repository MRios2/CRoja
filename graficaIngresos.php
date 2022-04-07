<?php
include("db.php");
include("nav.php");
?>
<html>
    <head>
        <title>Cruz roja</title>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
    </head>
    <style>
        .caja{
            margin: auto;
            max-width: 250px;
            padding: 20px;
            border: 1px solid #BDBDBD;
        }
        .caja select{
            width: 100%;
            font-size: 16px;
            padding: 5px;
        }
        .resultados{
            margin: auto;
            margin-top: 40px;
            width: 750px;
        }
    </style>
    <body> 
        <div class="text-left" style = "margin-top: 20px; margin-left: 20px">
        <form action="./ingresos.php">
        <input type="submit" class="btn btn-success" value="Administrar"/>
        </form>
        <!-- <button href="./ingresos.php" class="btn btn-success btn-left btn-block">Administrar</button> -->
        </div>
         <div class="text-center" style = "margin-top: 20px">
            <?php

                $mes = array(
                    1, "Enero",
                    2, "Febrero",
                    3, "Marzo",
                    4, "Abril",
                    5, "Mayo",
                    6, "Junio",
                    7, "Julio",
                    8, "Agosto",
                    9, "Sepiembre",
                    10, "Octubre",
                    11, "Noviembre",
                    12, "Diciembre"

            )
            ?>
            <select class="select" onChange="mesSelected(this.value);">
                
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
                <option selected value="11">Noviembre</option>
                <option value="12">Diciembre</option>
                   
            </select>

        </div>
        <div class="text-center" style = "margin-top: 15px;"><h2> Ingresos de noviembre</h2></div>
        <div class="resultados"><canvas id="grafico"></canvas></div>
    </body>
    <script>

                            var Datos = {
                                    labels : [
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
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
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
                            
                            var contexto = document.getElementById('grafico').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });

    </script>
</html>