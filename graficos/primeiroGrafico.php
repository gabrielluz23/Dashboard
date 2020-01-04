<html>
  <head>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População',{ role: 'annotation' }],
          <?php 
          include 'conexao.php';
          $sql = "SELECT * FROM cidades";
          $buscar = mysqli_query($conexao,$sql);
          while ($dados = mysqli_fetch_array($buscar)) {
            $id = $dados['id'];
            $cidade = $dados['cidade'];
            $populacao = $dados['populacao'];
        
          ?>
          [ '<?php echo $cidade ?>', <?php echo $populacao ?>,<?php echo $populacao ?>],
          <?php 
          }
        ?>
        ]);
      

        var options = {
          title: 'População das cidades',
          legend: { position: 'top' },
          height:400
        };

        var chart = new google.visualization.LineChart(document.getElementById('graficoCurvado'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div class="container">
    <div id="graficoCurvado" ></div>
  </div>
  </body>
</html>

