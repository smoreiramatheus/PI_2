<?php
//require_once('conn.php');
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_recurso";

$conn = mysqli_connect($servername, $username, $password, $database);
$id = "oi"
?>
<?php
$url = "http://localhost/projetoUPA/projetoUPA/api.php/?fn=read";
$medicamento      = json_decode(file_get_contents($url));
//var_dump($content_json);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Medicamentos</title>

    <!-- Link de estilização BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/521a3c16fd.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    require_once('menu.php');
    ?>
    <!-- CONTEÚDO CENTRAL-->
    <div class="container text-center conteudo">
        <div class="mt-5">
            <p class="h2 text-center">Consultar Medicamentos</p>
        </div>

        <!--<div class="mt-5">
           <p class="font-weight-bold"> Nova Solicitação
                <button type="button" class="btn btn-warning btn-sm ml-2" href="solicitacao.php">Solicitante Cadastrado</button>
                <button type="button" class="btn btn-secondary btn-sm" href="cadastroSolic.php">Cadastrar Solicitante</button> 
            </p>
        </div>-->

        <div class="d-flex justify-content-center mt-5">
            <table class="table table-sm table-hover w-75">

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (isset($_POST["botaoBuscar"])) {

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "db_recurso";
                        $conn = mysqli_connect($servername, $username, $password, $database);

                        $textoBusca = $_POST["busca"];
                        $sql = "select * from medicamentos where nome like '%$textoBusca%' or status like '%$textoBusca%' or id like '%$textoBusca%' order by id";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($rows = $result->fetch_assoc()) {
                    ?>
                                <tr>
                                    <th><?php echo $rows["id"]; ?></th>
                                    <td><?php echo $rows["nome"]; ?></td>
                                    <td><?php echo $rows["status"]; ?></td>
                                </tr>
                            <?php
                            }
                        }
                    } else {
                        $url = "http://localhost/projetoUPA/projetoUPA/api.php/?fn=read";
                        $medicamento      = json_decode(file_get_contents($url));
                        if (count($medicamento->medicamentos)) {
                            //$i = 0;
                            foreach ($medicamento->medicamentos as $Medicamento) {
                                //$i++;
                            ?>

                                <tr>
                                    <td><?php echo $Medicamento->id ?></td>
                                    <td><?php echo $Medicamento->nome ?></td>
                                    <td><?php echo $Medicamento->status ?></td>
                                </tr>

                    <?php
                            }
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="" id="footer-espacado">
        <?php
        require_once('footer.php');
        ?>
    </div>

</body>

</html>