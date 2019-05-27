<?php
include('../includes/header.php');

include ('../includes/database.php');

?>

    <div class = "container">
        <form accept-charset="UTF-8" method="post" action="listarexameseconsultas.php">
            <div class = "row">
                <div class = "col-md-4">
                    <h4><strong>CPF Paciente</strong></h4>
                    <input class="form-control" type="text" name="cpf"  required>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <div class = "row">
                <div class = "col-md-2 col-md-offset-8">
                    <button class="btn btn-info form-control" type="submit">Listar</button>
                </div>
            </div>
        </form>
    </div>


<?php

include('../includes/footer.php');

?>