<?php
    
require_once("config.php");


$head = new head;
$select = new select;
$funcoes = new funcoes;

$colunas = "*";
$tabela = "tarefa";

$head->header();

echo '<body> 
        <div id="listar_tarefa" > 
             <h1> Selecione o comodo que quer listar as tarefas </h1>
        </div>
        '
        ;


//$select->selecionar($colunas,$tabela);



$funcoes->imagens();

?>
