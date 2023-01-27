<?php


class funcoes
{
    public function inputs($page)
    {

        switch ($page) {

            case 4:

                echo '
                

                <body class="container">
                <form action="lista_tarefa.php" method="post">
                <table>
                <tr>

                <td>     <label for ="nome"> Insira o nome da tarefa </label>  
                         <input type="text" id="nome" name="nome"></td>
               
                <td>     <label> Insira a descricao </label>
                     <input type="text" id="descricao" name="descricao"></td>

                <td>    <label> Insira a data de hoje </label>
                        <input type="text" id="data_cadastro" name ="data_cadastro"></td>
              
                <td>   <label> Insira em qual o comodo </label>
                    <input type="text" id="comodoo" name="comodoo"></td>

                <td>   <label> Insira o nome de quem ira executar</label>
                    <input type="text" id="nome_executor" name="nome_executor"></td>

                <td> <button type ="submit"> Inserir Tarefa </button> </td> 
                
                </tr>

                

                </table>

                
                </form>
</body>

                ';
        }






 
   }

   public function imagens (){

        echo '<div class="container">
            <div id="quarto">
            <a href="comodo-quarto.php">
                <img class="images" src="images/quarto.png" alt="Quarto"> 
            </a>
            </div>
            <div>
             <a href="comodo-banheiro.php">
            <img class="images" src="images/banheiro.png" alt="Banheiro"> 
            </a>
            </div>

            <a href="comodo-cozinha.php">
            <img class="images" src="images/cozinha.png" alt="Cozinha"> 
            </a>   
            
            <a href="comodo-sala.php">
            <img class="images" src="images/sala.png" alt="Sala"> 
            </a>
            


        ';

   }
}


?>