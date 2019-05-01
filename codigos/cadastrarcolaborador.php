<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];

$server = "us-cdbr-iron-east-03.cleardb.net";
$user = "b20da04202afd0";
$schema = "heroku_43e989bb842fe2c";
$pass = "0169c99a";

$conn = new mysqli($server, $user, $pass, $schema);

$query = $conn->prepare("INSERT INTO PACIENTE (nome, dataNascimento, cpf, sexo) VALUES (?,?,?,?)");

$query->bind_param('ssss',utf8_decode($nome), $dataNascimento, $cpf, $sexo);

$query->execute();

mysqli_close($conn);

 header('Location:../pages/inserircolaborador.php');