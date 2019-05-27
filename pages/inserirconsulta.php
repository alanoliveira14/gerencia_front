<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../includes/header.php');

include ('../includes/database.php');

$crm = $_POST['medico'];
$data = $_POST['data'];

$conn = new mysqli($server, $user, $pass, $schema);
$query = "select hora from consulta where idMedico = (select idMedico from medico where crm = '".$crm."') and data = '".$data."' order by hora asc";

$horarios = mysqli_query($conn, $query);

$mensagem = "Esse profissional já tem consultas agendadas nos seguintes horários:<br/>";

foreach ($horarios as $horario):

    $mensagem = $mensagem . $horario['hora'] . " | ";

endforeach;



?>

    <div class = "container">
        <form accept-charset="UTF-8" method="post" action="../codigos/cadastrarconsulta.php">

            <h3><?=$mensagem?></h3>


            <div class = "row">
                <div class = "col-md-3">
                    <h4><strong>CPF Paciente</strong></h4>
                    <input class="form-control" type="text" name="cpf"  required>
                </div>
                <div class = "col-md-3">
                    <h4><strong>CRM Medico</strong></h4>
                    <input class="form-control" type="text" name="crm"  placeholder="<?=$crm?>" value="<?=$crm?>">
                </div>
                <div class = "col-md-2">
                    <h4><strong>Data</strong></h4>
                    <input class="form-control" type="text" name="data"  placeholder="<?=$data?>" value="<?=$data?>">
                </div>
                <div class = "col-md-2">
                    <h4><strong>Hora</strong></h4>
                    <input class="form-control" type="time" name="hora"  required>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <div class = "row">
                <div class = "col-md-2 col-md-offset-8">
                    <button class="btn btn-info form-control" type="submit">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>


<?php

include('../includes/footer.php');

?>