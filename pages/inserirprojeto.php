<?php
include('../includes/header.php');

$ch = curl_init('localhost:8080/colaborador/listar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8'
    ));

$colab = curl_exec($ch);
$colaboradores = json_decode($colab, true);


$ch = curl_init('localhost:8080/cliente/listar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8'
    ));

$cli = curl_exec($ch);
$clientes = json_decode($cli, true);

?>
    <div class = "container">
    <form accept-charset="UTF-8" method="post" action="../codigos/cadastrarprojeto.php">
        <div class = "row">
            <div class = "col-md-4">
                <h4><strong>Título</strong></h4>
                <input class="form-control" type="text" name="titulo"  required>
            </div>
            <div class = "col-md-3">
                <h4><strong>Descrição</strong></h4>
                <input class="form-control" type="text" name="descricao">
            </div>
            <div class = "col-md-3">
                <h4><strong>Finalidade</strong></h4>
                <input class="form-control" type="text" name="finalidade">
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-2">
                <h4><strong>ID Gerente</strong></h4>
                
                <select name="idGerente" class="form-control">
                    <?php
                    foreach($colaboradores as $clbs) :
                        ?>
                        <option value="<?=$clbs['idColaborador']?>">
                            <?=$clbs['nome']?>
                        </option>
                        <?php
                    endforeach
                    ?>
                </select>
            </div>
            <div class="col-md-2">
                <h4><strong>ID Cliente</strong></h4>
                
                <select name="idCliente" class="form-control">
                    <?php
                    foreach($clientes as $clt) :
                        ?>
                        <option value="<?=$clt['idCliente']?>">
                            <?=$clt['nome']?>
                        </option>
                        <?php
                    endforeach
                    ?>
                </select>
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