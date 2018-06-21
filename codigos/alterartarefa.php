<?php
if( $_POST['dataFinalizacao'] == ""){
    $dataFinalizacao = null;

}else{
    
$dataFinalizacao = $_POST['dataFinalizacao'];
}
$idTarefas = $_POST['idTarefa'];
$fkIdColaborador = $_POST['idColaborador'];
$situacao = $_POST['situacao'];
$data = array(
    "idTarefas"=>$idTarefas,
    "dataFinalizacao"=>$dataFinalizacao,
    "fkIdColaborador"=>$fkIdColaborador,
    "situacao"=> $situacao
);


$data_string = json_encode($data);
echo $data_string;
$ch = curl_init('http://localhost:8080/tarefa/alterar');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, 
 array(
  'Content-Type: application/json; Charset=UTF-8'
 ));

 $result = curl_exec($ch);
 header('Location:../pages/listartarefas.php');