<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$gerenciaProjetos = $_POST['gerenciaprojetos'];
$idColaborador = $_POST['idColaborador'];

$data = array(
    "usuario" => $usuario,
    "senha" => $senha,
    "gerenciaProjetos"=>$gerenciaProjetos,
    "idColaborador"=>$idColaborador
);


$data_string = json_encode($data);
echo $data_string;
$ch = curl_init('http://localhost:8080/usuario/criar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, 
 array(
  'Content-Type: application/json; Charset=UTF-8'
 ));

 $result = curl_exec($ch);
 header('Location:../pages/inserirusuario.php');