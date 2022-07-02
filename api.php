
<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Contente-Type: appplication/json");
$data = [];

require_once "medicamentos.php";



$fn = $_REQUEST["fn"] ?? null;
$id = $_REQUEST["id"] ?? 0;
$nome = $_REQUEST["nome"] ?? null;
$status = $_REQUEST["status"] ?? null;

$medicamentos = new Medicamentos;
$medicamentos->setId($id);

if ($fn === "create" && $nome !== null && $status !== null) {
    $medicamentos->setNome($nome);
    $medicamentos->setStatus($status);
    $data["medicamentos"] = $medicamentos->create();

}

if ($fn === "read") { 
    $data["medicamentos"] = $medicamentos->read();

}

if ($fn === "update" && $id > 0 && $nome !== null && $status !== null) {
    $medicamentos->setNome($nome);
    $medicamentos->setStatus($status);
    $data["medicamentos"] = $medicamentos->update();

}

if ($fn === "delete" &&  $id > 0) {
    $data["medicamentos"] = $medicamentos->delete();

}
die(json_encode($data));


?>