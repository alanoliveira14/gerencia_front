<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$tipoExame = $_POST['tipoExame'];
$cpf = $_POST['cpf'];

include ('../includes/database.php');


$conn = new mysqli($server, $user, $pass, $schema);

$query = $conn->prepare("INSERT INTO EXAME (idPaciente, idTipoExame) VALUES ((select idPaciente from paciente where cpf = ?),?)");

$query->bind_param('si',$cpf, $tipoExame);

$query->execute();

mysqli_close($conn);

 header('Location:../pages/cadastrartarefa.php');