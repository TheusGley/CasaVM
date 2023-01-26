<?php


//TABELAS E COLUNAS




spl_autoload_register(

    function ($nomeClass) {


        $dir_class = "Classes";
        $fileName = $dir_class . DIRECTORY_SEPARATOR . $nomeClass . ".php";

        if (file_exists($fileName)) {
            require_once($fileName);
        }

    }

);

function conexao($sql)
{

    $conn = new PDO("mysql:dbname=casavm; host=127.0.0.1", "root", "");

    $result = $conn->prepare($sql);


    return $result;
}




?>