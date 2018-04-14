<?php

include('../includes/header.php');
$ch = curl_init('http://localhost:8080/colaborador/listar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8',
        'Authorization:' . $_SESSION['uToken']
    ));

$result = curl_exec($ch);
$resultado = json_decode($result, true);
?>


                <div class="col-md-9">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Nome colaborador</th>
                            <th>E-mail</th>
                            <th>Data Nascimento</th>
                            <th>CPF</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                            <form action="../codigos/deletarcolaborador.php" method="post">
                                <td><?=$res['nome']?></td>
                                <td><?=$res['email']?></td>
                                <td><?=$res['dataNascimento']?></td>
                                <td><?=$res['cpf']?></td>
                                <td><input class="form-control" type="hidden" name="user"  value= <?=$res['idColaborador']?>><button class="btn btn-danger form-control" type="submit">deletar</button></td></form>
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