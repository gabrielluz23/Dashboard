<html>



<head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mes', 'Quantidade de Clientes Cadastrados'],
                <?php
                include 'querys/graficosPainel.php';
                while ($dadosCliente = mysqli_fetch_array($buscarClientes)) {
                    $mesCliente = $dadosCliente['mes_cliente'];
                    $quantidadeCliente = $dadosCliente['quantidade_cliente'];
                ?>['<?php echo $mesCliente ?>', <?php echo $quantidadeCliente ?>],
                <?php } ?>
            ]);

            var options = {
                legend: {
                    position: 'none'
                }

            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mes', 'Quantidade de Vendas'],
                <?php
                include 'querys/graficosPainel.php';
                while ($dadosVendas = mysqli_fetch_array($buscarVendas)) {
                    $mesVenda = $dadosVendas['mes_venda'];
                    $quantidadeVenda = $dadosVendas['quantidade_venda'];
                ?>['<?php echo $mesVenda ?>', <?php echo $quantidadeVenda ?>],
                <?php } ?>
            ]);

            var options = {

            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-8" >

                <h2 class="graficoPizza"> Graficos de clientes </h2>
                <div id="curve_chart"style="margin-left: -80px"></div>

            </div>
            <div class="col-md-4">

                <h2> Graficos de Vendas </h2>
                <div id="piechart" style="width: 350px"></div>
                
            </div>
        </div>
    </div>
</body>

</html>