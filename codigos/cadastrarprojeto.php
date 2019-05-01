<?php

include('../includes/database.php');

$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$crm = $_POST['crm'];

$conn = new mysqli($server, $user, $pass, $schema);

$query = $conn->prepare("INSERT INTO MEDICO (nome, especialidade, crm) VALUES (?,?,?)");

$query->bind_param('sss', utf8_decode($nome), $especialidade, $crm);

$query->execute();

mysqli_close($conn);


 header('Location:../pages/inserirprojeto.php');