<?php

class head {
    
    public function header () {
        
       
       
     echo '<head>
	    <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <div class="container">
        <header>
        <nav>
            <div class="nav-container">
            
            <a href="index.php">
                <img id="logo" src="images/logo.webp" alt="CasaVM">
            </a>
            
           

            
            <i class="fas fa-bars btn-menumobile">      
            </i>

              

            <ul>
                    <h2 > Casa Virtual  </h1>  
                    <ul>
                    
                    <li><a href="comodos.php">Comodos</a></li>
                    <li><a href="tarefas.php">Lista de Tarefas</a></li>
                    <li><a href="login.php">Sair</a></li>
            
                    </ul>
            </ul>
           </div>
        </nav>
        </head> 
';
    }


}
$head = new head;
$head -> header();
?>

