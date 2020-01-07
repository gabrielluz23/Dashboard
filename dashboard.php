<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.4/examples/dashboard/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">


  <title>DashBoard</title>



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
</head>

<body>
  <div class="d-none d-sm-block">
    <nav class="navbar navbar-dark  bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://getbootstrap.com/docs/4.4/examples/dashboard/#">DashBoard</a>
    </nav>
  </div>




  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar ">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="?pagina=">
                Pagina Inicial
              </a>
            </li>

            <li class="nav-item">

              <a class="nav-link" href="?pagina=cadastrovendas">
                Cadastro de Vendas
              </a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="?pagina=cadastroclientes">
                Cadastro de Clientes
              </a>

            </li>
          </ul>
        </div>
      </nav>
            <!-- dashboard Mobile  -->
      <div class="d-block d-sm-none ">
        <nav class="navbar fixed-top navbar-dark bg-dark flex-md-nowrap p-0 ">
          <div class="styleDrop">
            <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-target="#conteudoNavbarSuportado"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="navbar-toggler-icon"></span> Dashboard
            </a>

            <div class="dropdown-menu drop" aria-labelledby="dropdownMenuLink" id="conteudoNavbarSuportado">

              <a class="nav-link active" href="?pagina=">
                Pagina Inicial
              </a>

              <li class="nav-item">

                <a class="nav-link" href="?pagina=cadastroclientes">
                  Cadastro de Clientes
                </a>

              </li>
              <li class="nav-item">

                <a class="nav-link" href="?pagina=cadastrovendas">
                  Cadastro de Vendas
                </a>

              </li>

            </div>
          </div>
        </nav>
      </div>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>


        </div>
        <?php

        if (isset($_GET['pagina'])) {

          switch ($_GET['pagina']) {
            case 'cadastrovendas';
              include 'telas/cadastroVenda.php';
              break;

            case 'cadastroclientes';
              include 'telas/cadastroCliente.php';
              break;
            default;
              include 'telas/painel.php';
              include 'telas/graficosPainel.php';
              break;
          }
        }

        ?>


      </main>
    </div>
  </div>


  </main>

  </div>


</body>

</html>