<?php
include('../includes/header.php');
$idTarefa = $_POST['idtarefa'];


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
<form accept-charset="UTF-8" method="post" action="../codigos/alterartarefa.php">
    <div class = "row">
        <div class = "col-md-4">
            <h4><strong>SITUACAO</strong></h4>
            <select name="situacao" class="form-control">
                    <option value="EM ANDAMENTO">EM ANDAMENTO</option>
                    <option value="STAND BY">STAND BY</option>
                    <option value="ABANDONADA">ABANDONADA</option>
                    <option value="FECHADA">FECHADA</option>
            </select>
        </div>
        <div class = "col-md-3">
            <h4><strong>Data Finalização</strong></h4>
                <input class="form-control" type="date" name="dataFinalizacao">
        </div>
        <div class = "col-md-3">
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
            <input class="form-control" type="hidden" name="idTarefa"  value= <?=$idTarefa?> >
    </div>
    </div>
    <div class = "row">
    <br/>
    <br/>
        <div class = "col-md-2 col-md-offset-8">
            <button class="btn btn-info form-control" type="submit">Cadastrar</button>
        </div>
    </div>
</form>
</div>

<?php

include('../includes/footer.php');

?>