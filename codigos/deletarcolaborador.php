<?php

include('../includes/header.php');
$ch = curl_init('http://localhost:8080/colaborador/deletar/'.$_POST['user']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8'
    ));

$result = curl_exec($ch);
$resultado = json_decode($result, true);

header('Location:../pages/gerenciarcolaborador.php');