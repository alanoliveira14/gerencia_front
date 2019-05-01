<?php
include('../includes/header.php');
?>
    <div class = "container">
    <form accept-charset="UTF-8" method="post" action="../codigos/cadastrarcolaborador.php">
        <div class = "row">
            <div class = "col-md-4">
                <h4><strong>Nome do Paciente</strong></h4>
                <input class="form-control" type="text" name="nome"  required>
            </div>
            <div class = "col-md-2">
                <h4><strong>Data Nascimento</strong></h4>
                <input class="form-control" type="date" name="dataNascimento">
            </div>
            <div class = "col-md-2">
                <h4><strong>Sexo</strong></h4>
                <select class="form-control" id="sexo" name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
            <div class = "col-md-3">
                <h4><strong>CPF</strong></h4>
                <input class="form-control" type="text" name="cpf"  required>
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