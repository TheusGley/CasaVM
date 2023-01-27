<?php

require_once("config.php");


$head = new head;

$head->header();

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Casa Virtual</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	
			<div id="main-banner">
				<div id="search-form">
					<h1>Organize a sua Casa do melhor Jeito</h1>
					<p>Crie sua casa virtual e comece a suas tarefas.</p>			

                    <div class="container">
                         <h2> Escolha o Comodo </h2>

                            <div>
                                <a href="comodo-quarto.php">
                                    <img id="quarto" src="images/quarto.png" alt="Quarto"> 
                                </a>
                                
                            
                                <a href="comodo-banheiro.php">
                                    <img id="quarto" src="images/banheiro.png" alt="Banheiro">
                                </a>
                            </div>
                            <div>
                                <a href="comodo-quarto.php">
                                    <img id="quarto" src="images/cozinha.png" alt="Cozinha">
                                </a>
                                <a href="comodo-quarto.php">
                                    <img id="quarto" src="images/sala.png" alt="Sala ">
                                </a>
                            </div>
                       
        
					</div>
				</div>
			</div>
		</header>
		
					
</body>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>