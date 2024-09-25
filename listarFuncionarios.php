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
					<a href="../listarFuncionarios.php">Editar</a>
					<a href="#sobre">Sobre nós</a>
				</div>
			</div>
		</header>

                    <div class="area-form" id="cadastro">
                        <h2>Editar Cadastro</h2>
                        <br>
                        <div class="formulario">
                            
                            <form action="procedimentos/atualizar.php" method="get">

                                <input type="text" id="id_usuario" name="id_usuario" placeholder="ID A SER ALTERADO">
                                <input type="text" id="nome" name="nome" placeholder="Nome">
                                <input type="text" id="email" name="email" placeholder="E-mail">
                                <input type="text" id="cpf" name="cpf" placeholder="CPF">
                                <input type="text" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento">
                                <input type="text" id="endereco" name="endereco" placeholder="Endereço">
                                <input type="text" id="cep" name="cep" placeholder="CEP">
                                <input type="text" id="contatoEmergencia" name="contatoEmergencia" placeholder="Digite um contato">

                                <input type="submit" value="EDITAR">
                            </form>

                            
                        </div>
                    </div>

        <div class="tabela">  
            <h1>Usuarios Cadastrados</h1>
    <?php
        include 'conexao.php';
        session_start();

        $sql = "SELECT * FROM   usuarios";
        $resultado = mysqli_query($conexao, $sql);

     echo "<table class='formulario' width='500' border='1px'>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>cpf</th>
            <th>Data Nascimento</th>
            <th>endereco</th>
            <th>cep</th>
            <th>email</th>
            <th>contato emergencia</th>
            <th>Opção</th>
        </tr>
        ";

     while($linha = mysqli_fetch_assoc($resultado)){
        echo "<tr>
            <td>".$linha['id_usuario']."</td>
            <td>".$linha['nome_usuario']."</td>
            <td>".$linha['cpf_usuario']."</th>
            <td>".$linha['dataNasc_usuario']."</th>
            <td>".$linha['endereco_usuario']."</th>
            <td>".$linha['cep_usuario']."</th>
            <td>".$linha['email_usuario']."</th>
            <td>".$linha['contato_emergencia']."</td>
            <td><a href='procedimentos/excluir.php?id_usuario={$linha['id_usuario']}'>Excluir</a></td>        
            </tr>";
        }
        echo "</table>";

    ?>
        </div>

<!--footer-->
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
    </body>
</html>