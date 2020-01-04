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
                ['Cidade', 'População', {
                    role: 'style'
                }],
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM cidades";
                $buscar = mysqli_query($conexao, $sql);
                while ($dados = mysqli_fetch_array($buscar)) {
                    $id = $dados['id'];
                    $cidade = $dados['cidade'];
                    $populacao = $dados['populacao'];

                ?>['<?php echo $cidade ?>', <?php echo $populacao ?>,'black'],
                <?php
                }
                ?>
            ]);


            var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Populaçao das cidades",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "right" },
        colors: ['black'],
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("grafico"));
      chart.draw(view, options);
  }
  </script>
</head>

<body>
    <div id="grafico" style="width: 900px; height: 500px"></div>
</body>

</html>