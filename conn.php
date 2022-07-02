<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "epiz_30448384_db_projeto";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
?>