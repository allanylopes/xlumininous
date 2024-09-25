<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imagens/icone site.ico">
	
		<title>XLUMINOUS</title>
	</head>

	<body>
		<header class="header">
			<div class="nav-bar">
				<div class="logo">
					<h1>XLUMINOUS</h1>
				</div>
				<div class="menu-items">
					<a href="#home">Home</a>
					<a href="#produtos">Produtos</a>
					<a href="#blog">Blog</a>
					<a href="#cadastro">Cadastro</a>
					<a href="listarFuncionarios.php">Editar</a>
					<a href="#sobre">Sobre nós</a>
				</div>
			</div>
		</header>



		
		<section class="section-1" id="home">
			<div class="container">
				<div class="area-title">
					<h2>SOBRE XLUMINOUS</h2>
					<p>Entenda melhor sobre as nossas soluções inovadoras para alertar pessoas com deficiência
						auditiva sobre desastres naturais.</p>
				</div>

				<div class="video">
					<iframe width="660" height="315"
						src="https://www.youtube.com/embed/nhzwCB6xjYE?si=YwpqKJLKufH-GvMG&amp;controls=0&amp;start=1"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>

			</div>
			</div>

		</section>
		<!-- area cards-->
		<section class="section-cards" id="produtos">
			<h2>Automação com Xluminous</h2>
			<div class="cards">
				<div class="card">
					<img src="imagens/lampadam.png">
					<span>Lâmpada Inteligente</span>
				</div>
				<div class="card">
					<img src="imagens/pulseirapretasite.png">
					<span>Pulseira na Cor Preta</span>
				</div>
				<div class="card">
					<img src="imagens/pulseiraazulsite.png">
					<span>Pulseira na Cor Azul</span>
				</div>
			</div>
		</section>
		<!--terceira seção-->
		<section class="section-3" id="blog">
			<div class="container">
				<div class="area-title-2">
					<h2>Sobre os produtos</h2>
					<p>Promovemos a independência e a autonomia para pessoas com deficiência auditiva.
						A integração entre lâmpada, pulseira e aplicativos representa um avanço significativo
						no campo da tecnologia assistiva, proporcionando tranquilidade e resposta eficiente
						diante de situações críticas.</p>

					<a>CONHEÇA MAIS</a>
				</div>
				<div class="image2">
					<img src="imagens/imagem5.avif">
				</div>
			</div>
		</section>
		<!--formulário-->
		<div class="area-form" id="cadastro">
			<div class="container">
				<h2>Faça o pré-cadastro que te avisaremos assim que estiver dísponivel</h2>

				<div class="formulario">

					<form action="procedimentos/proc_cadastrar_usuario.php" method="get">

						<input type="text" id="nome" name="nome" placeholder="Nome" required>
						<input type="text" id="email" name="email" placeholder="E-mail" required>
						<input type="text" id="cpf" name="cpf" placeholder="CPF" required>
						<input type="text" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento" required>
						<input type="text" id="endereco" name="endereco" placeholder="Endereço" required>
						<input type="text" id="cep" name="cep" placeholder="CEP" required>
						<input type="text" id="contatoEmergencia" name="contatoEmergencia" placeholder="Digite um contato" required>



						<input type="submit" value="CADASTRAR">
					</form>
				</div>
			</div>
		</div>

		

		<footer>
			<div class="footer">
				<div class="logotipo">
					<h1>Techno<span>Logic</span></h1>
				</div>
				<div class="social" id="sobre">

					<h3>Nossas redes sociais</h3>
					<div class="img-social">
						<img src="imagens/facebook.png">
						<img src="imagens/instagram.png">
						<img src="imagens/twiter.png">
					</div>
					<h5>2024- Desenvolvido por TechnoLogic</h5>
				</div>
			</div>

		</footer>
		<script src="script.js"></script>
	</body>

</html>