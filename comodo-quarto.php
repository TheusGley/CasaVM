<?php

require_once("config.php");

session_start();

$head = new Head;
$head->header();


$select = new select();

$sql_colunas = "*";
$sql_tabelas = "tarefa";
$select->selecionar($sql_colunas, $sql_tabelas);

?>

<body> 
<a  href="inserir-tarefa.php">
<button> Inserir Tarefa </button>  </a>

</body>