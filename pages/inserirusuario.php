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

?>
    <div class = "container">
    <form accept-charset="UTF-8" method="post" action="../codigos/cadastrarusuario.php">
        <div class = "row">
            <div class = "col-md-4  ">
                <h4><strong>Usuário</strong></h4>
                <input class="form-control" type="text" name="usuario"  required>
            </div>
            <div class = "col-md-3">
                <h4><strong>Senha</strong></h4>
                <input class="form-control" type="text" name="senha">
            </div>
            <div class = "col-md-2">
                <h4><strong>Gerente</strong></h4>
                <select name="gerenciaprojetos" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    ?>
                </select>
            </div>
            <div class = "col-md-2">
                <h4><strong>ID Colaborador</strong></h4>
                <select name="idColaborador" class="form-control">
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
        </div>
        <br/>
        <br/>
        <br/>
        <div class = "row">
            <div class = "col-md-2 col-md-offset-9">
                <button class="btn btn-info form-control" type="submit">Cadastrar</button>
            </div>
        </div>
    </form>
</div>


<?php

include('../includes/footer.php');

?>