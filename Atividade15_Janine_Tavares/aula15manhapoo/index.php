<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>
			Página OnePage - Modelo de página com estrutura de arquivo único
		</title>
		<meta name="author" content="Aline Zenker">
		<meta name="description" content="Página OnePage - onde a estrutura da página fica em um único arquivo e utilizamos link âncora para acessar">
		<meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<main class="geral">
			<header class="topo">
				<!--AQUI FICA O BANNER - topo da página-->
			</header>

<nav class="menu">
	<ul>
		<li> <a href="#home"> POO </a></li>
		<li> <a href="#conteudo2"> Exemplo 01 </a></li>
		<li> <a href="#conteudo3"> Exemplo 02 </a></li>
		<li> <a href="exercicio1.php"> Exercicio 1 </a></li>
	</ul>
</nav>

			<section class="apresentacao" id="home">
				<article class="poo">
					<h2>PHP - Orientação a Objetos</h2>
					<figure>
						<img src="img/classe.png" alt="Exemplo de Classe">
					</figure>
					<p>
						CLASSES: No mundo real, muitas vezes você vai encontrar objetos que são parecidos, ou que pertencem à mesma espécie. Por exemplo, um cão da raça labrador e um cão da raça bulldog são diferentes na aparência, mas ambos são cães. Podemos ter uma bicicleta de corrida, e outra infantil, mas ambas são bicicletas e partilham características comuns.
					</p>
					<p>
						A classe na programação define as características e ações de cada objeto que será mantido no sistema.
					</p>
				</article>
			</section>

			<section class="conteudo2" id="conteudo2">
				<!--Aqui colocamos o conteúdo do segundo botão do menu-->
				<aside class="exemplo">
					<h2>Exemplo Pessoa</h2>
					<p>
						Desenvolva um algoritmo que leia nome e idade de uma pessoa. Seu algoritmo deve retorna o ano que a pessoa nasceu.
					</p>
					<hr>
					<?php
						//Parte Controlador - Main - Principal - Fazer funcionar a classe:
						//1º Fazer enxergar o arquivo de classe:
						include 'pessoa.class.php';
						//2º ENXERGAR A CLASSE:
						$p1 = new Pessoa();
						//3º ATRIBUIR OS DADOS:
						$p1->setNome("Eduarda");
						$p1->setIdade(20);
						//4º SAÍDA DE DADOS:
						echo "<p>RESOLUÇÃO:
								 <br>".$p1->getNome().
								 "<br>Tem ".$p1->getIdade().
								 " anos.
								 <br>Nasceu em ".$p1->acharAnoNascimento(). "</p>";
					?>

				</aside>
			</section>

			<section class="conteudo3" id="conteudo3">
				<!--Aqui colocamos o conteúdo do terceiro botão do menu-->
				<aside class="exemplo">
					<h2>Exemplo Calculo</h2>
				</aside>
			</section>

			<footer class="rodape">
				<!--Aqui colocamos o rodapé - informações do site, do autor, contato, patrocinadores...-->
			</footer>
		</main>
	</body>
</html>
