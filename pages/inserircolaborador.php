<?php
include('../includes/header.php');
?>
    <div class = "container">
    <form accept-charset="UTF-8" method="post" action="../codigos/cadastrarcolaborador.php">
        <div class = "row">
            <div class = "col-md-4">
                <h4><strong>Nome</strong></h4>
                <input class="form-control" type="text" name="nome"  required>
            </div>
            <div class = "col-md-3">
                <h4><strong>Email</strong></h4>
                <input class="form-control" type="email" name="email">
            </div>
            <div class = "col-md-2">
                <h4><strong>Data Nascimento</strong></h4>
                <input class="form-control" type="date" name="dataNascimento">
            </div>
            <div class = "col-md-2">
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