<?php
require_once("config.php");


$head = new head;
$select = new select;

$colunas = "*";
$tabela = "tarefa";

$head->header();

echo '<body> 
        <div id="listar_tarefa" > 
             <h1> Essas são as tarefas dessa casa. </h1>
        </div>
        '
        ;


$select->selecionar($colunas,$tabela);

$inserir = new INSERT;




$tabela = "tarefa";
$id = " ";
$descricao = $_POST['descricao'];
$data_cadastro = $_POST['data_cadastro'];
$nome = $_POST['nome'];
$data_execucao = ' ';
$comodoo = $_POST['comodoo'];
$nome_executor = $_POST['nome_executor'];

$inserir->insert_tarefa($tabela,$id, $descricao, $data_cadastro, $nome, $data_execucao, $comodoo, $nome_executor);





?>
