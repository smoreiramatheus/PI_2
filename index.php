<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/521a3c16fd.js" crossorigin="anonymous"></script>
    <title>Index</title>

</head>

<body>

<!-- INÍCIO MENU SOBRE -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="assets/logoPref.png" class="img-fluid" alt="Imagem responsiva"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login Administrador</a>
      </li>
    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- FIM MENU SOBRE -->


    <div class="container">

        <div class="d-flex mt-5">

            <div class="row d-inline ml-5 mt-5 pt-5 text-justify ">
                <h5 class=" mt-3 ">Sobre nós</h5>
                <p class="mt-3">
                A Unidades Básicas de Saúde (UBS) é a porta de entrada preferencial do Sistema Único de
                Saúde (SUS). Temos por objetivo atender e auxiliar na redução dos problemas de saúde na comunidade, 
                sem que haja a necessidade de encaminhamento para outros serviços, como emergências e hospitais.
                </p>
            </div>

            <div class="col-md-6 d-inline pl-5 mt-5 pl-3" id="img-home">
                <img src="assets/Medicine-bro.png" class="w-75" alt="">
            </div>
        </div>
    </div>
    <div class="fixed-bottom">
        <?php
        require_once('footer.php');
        ?>
    </div>

</body>

</html>