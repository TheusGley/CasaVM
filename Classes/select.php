<?php
require_once("config.php");






class select
{

    public function selecionar($sql_colunas, $sql_tabela)
    {



        $query = conexao('SELECT ' . $sql_colunas . 'FROM ' . $sql_tabela);

         $query->execute();

         $results = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {
            echo '
            <div id="main-banner"><table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data de Criação</th>
                <th scope="col">Data de Execução</th>
                <th scope="col">Reponsavel</th>
                <th scope="col">Executor</th>
                <th scope="col">Comodo</th>
             



              </tr>
            </thead>

            <tbody>
            <tr>
         
            <th scope="row">' .$row["id_tarefa"]. '</th>
            <th scope="row">' .$row["descricao"].'</th>
            <th scope="row">' .$row["data_cadastro"].'</th>
            <th scope="row">' .$row["data_execucao"].'</th>
            <th scope="row">' .$row["nome"].'</th>
            <th scope="row">' .$row["nome_executor"].'</th>
            <th scope="row">' .$row["comodo"].'</th>


            
            
            </tbody>
            </table>
        ';




        }
        return $results;
    }

}
            
    

?>