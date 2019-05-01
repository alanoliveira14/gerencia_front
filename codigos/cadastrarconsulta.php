<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../includes/database.php');

$cpf = $_POST['cpf'];
$crm = $_POST['crm'];
$data = $_POST['data'];
$hora = $_POST['hora'];

$conn = new mysqli($server, $user, $pass, $schema);

    $query = $conn->prepare("INSERT INTO CONSULTA (idPaciente, idMedico, data, hora) VALUES ((select idPaciente from paciente where cpf = ?),(select idMedico from medico where crm = ?), ?, ?)");

$query->bind_param('ssss', $cpf, $crm, $data, $hora);

$query->execute();

mysqli_close($conn);


header('Location:../pages/inserirconsulta.php');