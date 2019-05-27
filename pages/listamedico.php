<?php
include('../includes/header.php');

include ('../includes/database.php');


$conn = new mysqli($server, $user, $pass, $schema);
$query = "SELECT * FROM medico";

$exames = mysqli_query($conn, $query);

?>

    <div class = "container">
        <form accept-charset="UTF-8" method="post" action="inserirconsulta.php">
            <div class = "row">
                <div class = "col-md-6">
                    <h4><strong>Medico</strong></h4>
                        <select name="medico" class="form-control">
                            <?php
                            foreach($exames as $clbs) :
                                ?>
                                <option value="<?=$clbs['CRM']?>">
                                    <?=utf8_encode($clbs['nome'])." - ".$clbs['especialidade']?>
                                </option>
                            <?php
                            endforeach
                            ?>
                        </select>
                    </div>

                <div class = "col-md-2">
                    <h4><strong>Data</strong></h4>
                    <input class="form-control" type="date" name="data"  required>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <div class = "row">
                <div class = "col-md-2 col-md-offset-8">
                    <button class="btn btn-info form-control" type="submit">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>


<?php

include('../includes/footer.php');

?>