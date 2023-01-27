<?php

require_once("config.php");
session_start();

$_SESSION[$page]= 4;





$inserir = new INSERT;
$head = new head;

$head->header();

$funcoes = new funcoes; 



$funcoes->inputs($_SESSION[$page]);







?>



