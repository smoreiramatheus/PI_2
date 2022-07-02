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

<!-- INÍCIO MENU GERAL -->
<?php
        require_once('menu.php');
?>
<!-- FIM MENU GERAL -->


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
                <img src="assets/Community-amico.png" class="w-75" alt="">
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