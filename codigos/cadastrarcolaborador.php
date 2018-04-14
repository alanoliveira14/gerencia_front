<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$dataNascimento = $_POST['dataNascimento'];
$cpf = $_POST['cpf'];
$data = array(
    "nome" => $nome,
    "email" => $email,
    "dataNascimento"=>$dataNascimento,
    "cpf"=>$cpf
);


$data_string = json_encode($data);
echo $data_string;
$ch = curl_init('http://localhost:8080/colaborador/criar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, 
 array(
  'Content-Type: application/json; Charset=UTF-8'
 ));

 $result = curl_exec($ch);
 header('Location:../pages/inserircolaborador.php');