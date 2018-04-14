<?php

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$finalidade = $_POST['finalidade'];
$idCliente = $_POST['idCliente'];
$idGerente = $_POST['idGerente'];
$data = array(
    "titulo" => $titulo,
    "descricao" => $descricao,
    "finalidade"=>$finalidade,
    "idCliente"=>$idCliente,
    "idGerente"=>$idGerente
);


$data_string = json_encode($data);
echo $data_string;
$ch = curl_init('http://localhost:8080/projeto/criar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, 
 array(
  'Content-Type: application/json; Charset=UTF-8'
 ));

 $result = curl_exec($ch);
 header('Location:../pages/inserirprojeto.php');