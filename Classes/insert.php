<?php
require_once("config.php");


class INSERT 
{
    function insert_musica($sql_tabela, $id,  $coluna1, $coluna2, $coluna3, $coluna4, $coluna5)
    {

        $insert = conexao("INSERT INTO " . $sql_tabela . " VALUES  (:ID, :DURACAO, :AUTOR, :VIDEO,:AUDIO, :NOME)");

        $insert->bindParam(":ID", $id);
        $insert->bindParam(":DURACAO", $coluna1);
        $insert->bindParam(":AUTOR", $coluna2);
        $insert->bindParam(":VIDEO", $coluna3);
        $insert->bindParam(":AUDIO", $coluna4);
        $insert->bindParam(":NOME", $coluna5);


        
        $insert->execute();


        echo 'insert feito com sucesso<br>';

        echo '<button value="clica"> </button> ';



    }
    }


?>