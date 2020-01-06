<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total de clientes</div>
                    <div class="card-body ">
                        <h5 class="card-title painel">
                            <?php 
                             include 'querys/painel.php';
                             echo $quantidadeCliente;
                            ?>
                             <span class="spanPainel">/ QTD</span>
                        </h5>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card  text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Faturamento Anual</div>
                    <div class="card-body ">
                        <h5 class="card-title painel"> 
                            <?php 
                             include 'querys/painel.php';
                             echo  "R$ ".$totalVenda;
                            ?>
                            <span class="spanPainel">/ BRL</span>
                            </h5>
                            
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total de vendas</div>
                    <div class="card-body ">
                        <h5 class="card-title painel">
                            <?php 
                             include 'querys/painel.php';
                             echo  $quantidadeVenda;
                            ?>
                           <span class="spanPainel">/ UNID</span>   
                        </h5>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>