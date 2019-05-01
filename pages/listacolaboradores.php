<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../includes/header.php');
include ('../includes/database.php');


$conn = new mysqli($server, $user, $pass, $schema);
$query = "SELECT * FROM PACIENTE";

$resultado = mysqli_query($conn, $query);

?>


                <div class="col-md-9">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Nome Paciente</th>
                            <th>CPF</th>
                            <th>Data Nascimento</th>
                            <th>Sexo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                                <td><?=$res['nome']?></td>
                                <td><?=$res['cpf']?></td>
                                <td><?=$res['dataNascimento']?></td>
                                <td><?=$res['sexo']?></td>

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