<?php

include('../includes/header.php');

include ('../includes/database.php');



$conn = new mysqli($server, $user, $pass, $schema);
$query = "SELECT * FROM MEDICO";

$resultado = mysqli_query($conn, $query);

?>


                <div class="col-md-9">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CRM</th>
                            <th>Especialidade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                                <td><?=utf8_encode($res['nome'])?></td>
                                <td><?=$res['crm']?></td>
                                <td><?=$res['especialidade']?></td>

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