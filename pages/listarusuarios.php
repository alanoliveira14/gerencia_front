<?php

include('../includes/header.php');

$ch = curl_init('http://localhost:8080/usuario/listar');
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
                            <th>Usuário</th>
                            <th>Data Inserção</th>
                            <th>Gerencia Projetos?</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                                <td><?=$res['usuario']?></td>
                                <td><?=$res['dataInsercao']?></td>
                                <td><?php
                                if($res['gerenciaProjetos'] == 1){
                                    echo 'Sim';
                                }else {
                                    echo 'Não';
                                }?></td>

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