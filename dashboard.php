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
  <link  href="css/style.css" rel="stylesheet">
  <!-- Custom styles for this template -->
</head>

<body>
  <div class="d-none d-sm-block">
    <nav class="navbar navbar-expand-lg navBarBackground">
      <a class="navbar-brand navoptions" href="?pagina="><img src="imagens\desklogo.png" class="classImage" alt=""> Gabriel Yago</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link navoptions" href="?pagina=" >Graficos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navoptions" href="?pagina=cadastrovendas">Cadastro de Vendas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navoptions" href="?pagina=cadastroclientes">Cadastro de Clientes</a>
          </li>
          
        </ul>
      </div>
    </nav>
  </div>




  <div class="container-fluid" id="dashBoard">
    <div class="row" id="dashBoard">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar dash">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active navoptionsblack" href="?pagina=">
              <img src="imagens\chart-bar-solid.svg"  class="icon">  Graficos
              </a>
            </li>

            <li class="nav-item">

              <a class="nav-link navoptionsblack" href="?pagina=cadastrovendas">
              <img src="imagens\dollar-sign-solid.svg" class="icon"> Cadastro de Vendas
              </a>

            </li>

            <li class="nav-item">

              <a class="nav-link navoptionsblack" href="?pagina=cadastroclientes">
              <img src="imagens\users-solid.svg"  class="icon">   Cadastro de Clientes
              </a>

            </li>
          </ul>
        </div>
      </nav>
      <!-- dashboard Mobile  -->
      <div class="d-block d-sm-none container-fluid">
        <nav class="navbar fixed-top navbar-dark flex-md-nowrap p-0  colorMobile">
          <div class="styleDrop">
          <img src="imagens\desklogo.png" class="classImage" alt=""> 
            <a class="btn dropdown dropdown-toggle" role="button" id="dropdownMenuLink" data-target="#conteudoNavbarSuportado" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="navbar-toggler-icon"></span> Dashboard
            </a>

            <div class="dropdown-menu drop" aria-labelledby="dropdownMenuLink" id="conteudoNavbarSuportado">

              <a class="nav-link active drop" href="?pagina=">
              <i class="fas fa-chart-bar"></i>  Graficos
              </a>

              <li class="nav-item">

                <a class="nav-link drop" href="?pagina=cadastroclientes"> 
                <i class="fas fa-users"></i>
                 Cadastro de Clientes
                </a>

              </li>
              <li class="nav-item">

                <a class="nav-link drop" href="?pagina=cadastrovendas">
                <i class="fas fa-dollar-sign"></i> Cadastro de Vendas
                </a>

              </li>

            </div>
          </div>
        </nav>
      </div>
      <!-- dashboard Mobile  -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


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
  <script src="https://kit.fontawesome.com/27ae087d05.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>