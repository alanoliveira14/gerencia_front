<?php
include('../includes/header.php');
$ch = curl_init('http://localhost:8080/projeto/listar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8'
    ));

$projeto = curl_exec($ch);
$projetos = json_decode($projeto, true);


$ch2 = curl_init('http://localhost:8080/colaborador/listar');
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json; Charset=UTF-8'
    ));

$colaborador = curl_exec($ch2);
$colaboradores = json_decode($colaborador, true);

?>

<div class = "container">
<form accept-charset="UTF-8" method="post" action="../codigos/cadastrartarefa.php">
    <div class = "row">
        <div class = "col-md-4">
            <h4><strong>Descrição</strong></h4>
            <input class="form-control" type="text" name="descricao"  required>
        </div>
        <div class = "col-md-3">
            <h4><strong>Data Início</strong></h4>
                <input class="form-control" type="date" name="dataInicio">
        </div>
        <div class = "col-md-3">
            <h4><strong>Data Prevista</strong></h4>
                <input class="form-control" type="date" name="dataPrevisao">
        </div>
    </div>
    <div class = "row">
        <div class = "col-md-2">
            <h4><strong>Responsável</strong></h4>
            
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
        <div class="col-md-2">
            <h4><strong>Projeto</strong></h4>
            
            <select name="idProjeto" class="form-control">
                <?php
                foreach($projetos as $proj) :
                    ?>
                    <option value="<?=$proj['idProjeto']?>">
                        <?=$proj['titulo']?>
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