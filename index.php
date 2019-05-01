<?php

include('header.php');
?>
<div class= "col-md-10">
  <h3>Bem vindo ao seus sistema médico</h3>

  <div class="panel-group">
    <h4>Recomendações</h4>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse5">Recomendações Básicas</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>Verifique a disponibilidade do médico</li>
            <li>Atenção ao agendar exames</li>
            <li>Atenção às datas</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="panel-group">
    <h4>O que você pode fazer?</h4>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse4">Veja as ações possíveis</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li>Agendar consultas</li>
            <li>Agendar Exames</li>
            <li>Cadastrar médicos</li>
            <li>Cadastrar pacientes</li>
            <li>Verificar o estoque</li>
          </ul>
        </div>
      </div>
    </div>
  </div>


</div>

<?php

include('footer.php');

?>