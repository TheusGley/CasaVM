<?php
require_once("config.php");


class INSERT 
{
    function insert_tarefa($sql_tabela, $id, $coluna1, $coluna2, $coluna3, $coluna4,$coluna5,$coluna6)
    {

        $insert = conexao("INSERT INTO " . $sql_tabela . " VALUES  ( :id, :descricao, :data_cadastro, :nome, :data_execucao,:comodo, :nome_executor)");

        $insert->bindParam(":id_tarefa", $id);
        $insert->bindParam(":descricao", $coluna1);
        $insert->bindParam(":data_cadastro", $coluna2);
        $insert->bindParam(":nome", $coluna3);
        $insert->bindParam(":data_execucao", $coluna4);
        $insert->bindParam(":comodo", $coluna5);
        $insert->bindParam(":nome_executor", $coluna6);


     
        
        $insert->execute();



        if ($insert){
            echo 'insert feito com sucesso <br>';

       }else{
            echo "insert n foi feito";
           }

        
        echo '<button value="clica"> </button> ';



    }
    }


?>