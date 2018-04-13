<?php
$usuario = $_POST['user'];
$senha = $_POST['senha'];

$data = array(
    "usuario" => $usuario,
    "senha" => $senha
);


$data_string = json_encode($data);
$ch = curl_init('http://localhost:8080/usuario/logar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, 
 array(
  'Content-Type: application/json; Charset=UTF-8'
 ));

$result = curl_exec($ch);
$resultado = json_decode($result, true);

print_r($result);

   if($resultado['idUsuario'] == ''){
       header("Location:../pages/login.php");
   }else{
       session_start();
       $_SESSION['userID'] = $resultado['idUsuario'];
       $_SESSION['gerente'] = $resultado['gerenciaProjetos'];
       
           header("Location:../pages/index.php");

    }