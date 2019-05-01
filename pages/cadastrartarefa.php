<?php
include('../includes/header.php');

include ('../includes/database.php');


$conn = new mysqli($server, $user, $pass, $schema);
$query = "SELECT * FROM TIPOEXAME";

$exames = mysqli_query($conn, $query);

?>

<div class = "container">
<form accept-charset="UTF-8" method="post" action="../codigos/cadastrartarefa.php">
    <div class = "row">
        <div class = "col-md-4">
            <h4><strong>CPF Paciente</strong></h4>
            <input class="form-control" type="text" name="cpf"  required>
        </div>
        <div class = "col-md-4">
            <h4><strong>Tipo Exame</strong></h4>
            <select name="tipoExame" class="form-control">
                <?php
                foreach($exames as $clbs) :
                    ?>
                    <option value="<?=$clbs['idTipoExame']?>">
                        <?=$clbs['tipoExame']?>
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