<?php

include('../includes/header.php');

$ch = curl_init('http://localhost:8080/tarefa/listar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8'
    ));

$result = curl_exec($ch);
$resultado = json_decode($result, true);
?>


                <div class="col-md-9">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Data Início</th>
                            <th>Data Prevista</th>
                            <th>Data Finalização</th>
                            <th>Situação</th>
                            <th>Projeto</th>
                            <th>Responsável</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                            <form action="editartarefa.php" method="post">
                                <td><?=$res['descricao']?></td>
                                <td><?=$res['dataInicio']?></td>
                                <td><?=$res['dataPrevista']?></td>
                                <td><?=$res['dataFinalizacao']?></td>
                                <td><?=$res['situacao']?></td>
                                <td><?=$res['nomeProjeto']?></td>
                                <td><?=$res['nomeColaborador']?></td>
                                <?php if ($res['situacao'] != 'FECHADA')
                                echo'<td><input class="form-control" type="hidden" name="idtarefa"  value='.$res["idTarefas"].'><button class="btn btn-success form-control" type="submit">editar</button></td>';?>
                                </form>
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