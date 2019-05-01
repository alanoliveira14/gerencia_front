<?php

include('../includes/header.php');


include ('../includes/database.php');


$conn = new mysqli($server, $user, $pass, $schema);
$query = "select e.idExame, p.nome, p.cpf, te.tipoExame from exame e inner join paciente p inner join tipoexame te where p.idPaciente = e.idPaciente and te.idTipoExame = e.idTipoExame;";

$resultado = mysqli_query($conn, $query);


?>


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
                        foreach($resultado as $res) :
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