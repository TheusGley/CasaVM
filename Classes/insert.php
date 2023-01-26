<?php
require_once("config.php");


class INSERT 
{
    function insert_tarefa($sql_tabela, $id,  $coluna1, $coluna2, $coluna3, $coluna4,)
    {

        $insert = conexao("INSERT INTO " . $sql_tabela . " VALUES  (:id_tarefa, :descricao, :data, :VIDEO,:AUDIO, :NOME)");

        $insert->bindParam(":id_tarefa", $id);
        $insert->bindParam(":descricao", $coluna1);
        $insert->bindParam(":data_cadastro", $coluna2);
        $insert->bindParam(":data_execucao", $coluna3);
        $insert->bindParam(":comodo", $coluna4);


        
        $insert->execute();


        echo 'insert feito com sucesso<br>';

        echo '<button value="clica"> </button> ';



    }
    }


?>