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
                            <th></th> 
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $res) :
                            ?>
                            <tr>
                            <form action="../codigos/deletarusuario.php" method="post">
                                <td name="user"><?=$res['usuario']?></td>
                                <td><?=$res['dataInsercao']?></td>
                                <td><?php
                                if($res['gerenciaProjetos'] == 1){
                                    echo 'Sim';
                                }else {
                                    echo 'Não';
                                }?></td>

                                <td><input class="form-control" type="hidden" name="user"  value= <?=$res['idUsuario']?> ><button class="btn btn-danger form-control" type="submit">deletar</button></td></form>
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