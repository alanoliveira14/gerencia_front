<?php

$descricao = $_POST['descricao'];
$dataInicio = $_POST['dataInicio'];
$dataPrevista = $_POST['dataPrevisao'];
$fkIdProjeto = $_POST['idProjeto'];
$fkIdColaborador = $_POST['idColaborador'];
$data = array(
    "descricao" => $descricao,
    "dataInicio" => $dataInicio,
    "dataPrevista"=>$dataPrevista,
    "fkIdProjeto"=>$fkIdProjeto,
    "fkIdColaborador"=>$fkIdColaborador,
    "situacao"=> "CRIADA"
);


$data_string = json_encode($data);
echo $data_string;
$ch = curl_init('http://localhost:8080/tarefa/criar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, 
 array(
  'Content-Type: application/json; Charset=UTF-8'
 ));

 $result = curl_exec($ch);
 header('Location:../pages/cadastrartarefa.php');