<?php

include('../includes/header.php');

$ch = curl_init('http://localhost:8080/projeto/listar');
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
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Finalidade</th>
                            <th>Gerente</th>
                            <th>Cliente</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                                <td><?=$res['titulo']?></td>
                                <td><?=$res['descricao']?></td>
                                <td><?=$res['finalidade']?></td>
                                <td><?=$res['nomeGerente']?></td>
                                <td><?=$res['nomeCliente']?></td>

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