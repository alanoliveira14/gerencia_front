<?php
include('../includes/header.php');


?>
    <div class = "container">
    <form accept-charset="UTF-8" method="post" action="../codigos/cadastrarprojeto.php">
        <div class = "row">
            <div class = "col-md-4">
                <h4><strong>Nome</strong></h4>
                <input class="form-control" type="text" name="nome"  required>
            </div>
            <div class = "col-md-3">
                <h4><strong>CRM</strong></h4>
                <input class="form-control" type="text" name="crm">
            </div>
            <div class = "col-md-3">
                <h4><strong>Especialidade</strong></h4>
                <select class="form-control" type="text" name="especialidade">
                    <option value="CARDIO">CARDIO</option>
                    <option value="CLÍNICO">CLINICO</option>
                    <option value="FISIO">FISIO</option>
                    <option value="NEURO">NEURO</option>
                    <option value="OFTALMO">OFTALMO</option>
                    <option value="PEDIATRA">PEDIATRA</option>
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