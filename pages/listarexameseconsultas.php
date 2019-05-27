<?php

include('../includes/header.php');


include ('../includes/database.php');

$cpf=$_POST['cpf'];
$conn = new mysqli($server, $user, $pass, $schema);
$query = "select data, hora, p.nome as 'pNome',p.cpf, m.nome as 'mNome', m.crm from consulta c inner join paciente p  inner join medico m where c.idPaciente = p.idPaciente and m.idMedico = c.idMedico and c.data >= now() and c.idPaciente =(select idPaciente from paciente where cpf = '".$cpf."')";

$resultado = mysqli_query($conn, $query);


$conn = new mysqli($server, $user, $pass, $schema);
$query = "select e.idExame, p.nome, p.cpf, te.tipoExame from exame e inner join paciente p inner join tipoexame te where p.idPaciente = e.idPaciente and te.idTipoExame = e.idTipoExame and e.idPaciente = (select idPaciente from paciente where cpf = '".$cpf."');";

$resultado2 = mysqli_query($conn, $query);



?>

    <div class="col-md-offset-5">
        <h3>CONSULTAS</h3>
    </div>
    <div class="col-md-9">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Nome Paciente</th>
                <th>CPF</th>
                <th>Nome Medico</th>
                <th>CRM</th>
                <th>Data</th>
                <th>Hora</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($resultado as $res) :
                ?>
                <tr>
                    <td><?=utf8_encode($res['pNome'])?></td>
                    <td><?=$res['cpf']?></td>
                    <td><?=utf8_encode($res['mNome'])?></td>
                    <td><?=$res['crm']?></td>
                    <td><?=$res['data']?></td>
                    <td><?=$res['hora']?></td>
                </tr>
            <?php
            endforeach
            ?>
            </tbody>
        </table>
    </div>
<div class="row">

</div>
    <div class="col-md-offset-5">
        <h3>EXAMES</h3>
    </div>
    <div class="col-md-9">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Nome Paciente</th>
                <th>CPF</th>
                <th>Tipo Exame</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($resultado2 as $res) :
                ?>
                <tr>
                    <td><?=$res['nome']?></td>
                    <td><?=$res['cpf']?></td>
                    <td><?=$res['tipoExame']?></td>
                </tr>
            <?php
            endforeach
            ?>
            </tbody>
        </table>
    </div>


<?php

include('../includes/footer.php');

?>