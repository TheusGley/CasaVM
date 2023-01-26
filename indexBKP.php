<?php

require_once("config.php");


$head = new head;

$head->header();

?> 
<!DOCTYPE html>
<html>
<head>
	<title>JobFinder</title>
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
					<form>
						<input type="text" name="job" placeholder="Digite o cargo">
						<select name="region">
							<option value="">Todos os estados</option>
						</select>
						<select name="category">
							<option value="">Categoria</option>
						</select>
						<input type="submit" value="Pesquisar">
					</form>
				</div>
			</div>
		</header>
		<main id="lastjobs-container" class="wrapper">
			<h1>Últimas vagas enviadas</h1>
			<ul>
				<li>
					<a href="job.html" class="clickarea">
						<div class="company-box">
							<img src="img/googlelogo.png">
							<div class="company-info">
								<h3>Developer</h3>
								<p>Google</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Mountain View, California</p>
						</div>
						<div class="job-type">
							<span class="clt">CLT</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="clickarea">
						<div class="company-box">
							<img src="img/ibmlogo.png">
							<div class="company-info">
								<h3>DBA</h3>
								<p>IBM</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Armonk, New York</p>
						</div>
						<div class="job-type">
							<span class="pj">PJ</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="clickarea">
						<div class="company-box">
							<img src="img/linkedinlogo.png">
							<div class="company-info">
								<h3>Front End Developer</h3>
								<p>Linkedin</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Sunnyvale, California</p>
						</div>
						<div class="job-type">
							<span class="homeoffice">Home Office</span>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="clickarea">
						<div class="company-box">
							<img src="img/facebooklogo.png">
							<div class="company-info">
								<h3>Full Stack Developer</h3>
								<p>Facebook</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Menlo Park, California</p>
						</div>
						<div class="job-type">
							<span class="pj">PJ</span>
						</div>
					</a>
				</li>
			</ul>
			<div class="btnjobs-container">
				<a href="#" class="btn-jobs">Ver mais vagas</a>
			</div>
		</main>
		<section id="sendjobs-container">
			<div id="sendjobs-inner" class="wrapper">
				<h2>Envie uma vaga que será vista por milhares de candidatos</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<a href="#" class="light-btn">Enviar vaga</a>
			</div>
		</section>
		<section id="status-container" class="wrapper">
			<h2 class="title-center">Estatísticas do JobFinder</h2>
			<p class="p-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div>
				<div class="status-box">
					<span class="status-qtd">150</span>
					<p class="status-text">Vagas abertas</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">250</span>
					<p class="status-text">Candidatos contratados</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">50</span>
					<p class="status-text">Empresas participantes</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">550</span>
					<p class="status-text">Candidatos</p>
				</div>
			</div>
		</section>
		<section id="testmony-container">
			<div class="wrapper">		
				<h2>Veja o que os candidatos dizem</h2>
				<p class="p-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="testmony-box">
					<p class="testmony-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<img src="img/avatar1.png">
					<p class="testmony-name">João</p>
				</div>
				<div class="testmony-box">
					<p class="testmony-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<img src="img/avatar2.png">
					<p class="testmony-name">Maria</p>
				</div>
				<div class="testmony-box">
					<p class="testmony-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<img src="img/avatar3.png">
					<p class="testmony-name">Pedro</p>
				</div>
				<div class="testmony-box">
					<p class="testmony-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<img src="img/avatar4.png">
					<p class="testmony-name">Alexia</p>
				</div>
			</div>
		</section>
		<section id="blog-container" class="wrapper">
			<h2 class="title-center">Últimos artigos do nosso blog</h2>
			<p class="p-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="article-box">
				<img src="img/blog1.jpg">
				<h4><a href="#">Article title</a></h4>
				<p class="article-date">05 de Fevereiro de 2019 | 10 comentários</p>
				<p class="article-resume">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>
			<div class="article-box">
				<img src="img/blog2.jpg">
				<h4><a href="#">Article title</a></h4>
				<p class="article-date">05 de Fevereiro de 2019 | 10 comentários</p>
				<p class="article-resume">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>
			<div class="article-box">
				<img src="img/blog3.jpg">
				<h4><a href="#">Article title</a></h4>
				<p class="article-date">05 de Fevereiro de 2019 | 10 comentários</p>
				<p class="article-resume">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="article-btn light-btn">Ler post</a>
			</div>
		</section>
		<footer>
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<img src="img/logo.png">
						<h2>JobFinder</h2>
						<p>A maneira mais fácil de encontrar seu próximo emprego.</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Artigos rescentes</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2019</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2019</span>
							</li>
							<li>
								<a href="#">Como conseguir o primeiro emprego em tempos de crise?</a>
								<span class="article-date">05 de fevereiro de 2019</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-box">
					<h2>Nos encontre nas redes sociais</h2>
					<ul class="footer-list">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-linkedin"></i>
								<span>Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="wrapper">
					<p>horaDeCodar - 2019</p>
				</div>
			</div>
		</footer>
	</div>
</body>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>