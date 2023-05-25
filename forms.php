<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELOYSA'S BEAUTY SECRETS</title>
    <link rel = "stylesheet" href = "estilo.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>
<body>

    <div class = "cabeca"> 
    <header> 

        <img src="imagens/logo.png" alt="Eloysa Beauty Secrets">
        <nav>
        <ul>
            <li><a href="index.php">Como Funciona</a></li>
            <li><a href="index.php">Serviços</a></li>
            <li><a href="forms.php">Cliente</a></li>
            <li><a href="empresa.php">Sobre a Empresa</a></li>
        </ul>
        </nav>

    </header>
    </div>

    <main class="conteudoprincipal">
    <div class="inicio">

        <img src="imagens/foto3.png" alt="Beleza e bem-estarno conforto de casa.">

    </div>

<form action="forms.php" method="post">
	<br>
	<br>
	<h2>Formulário de Cadastro</h2>
				<div class="campoform">
					<label for="Nomecompleto"> Nome completo:</label>
					<input type="text" id="Nomecompleto" name="Nomecompleto" placeholder="Digite seu nome completo.">
				</div>
			   <br>
			   <br>
				 
			   <div class="campoform">
			<label for="nasci"> Data de nascimento: </label>
				<input type="date" id="nasci" name="datanasc">
			</div>
			
			<br>
			<br>
			
			<div class="campoform">
			<label for="mensagem">Sugestões </label>
				<input type="mensagem" rows="20">
			</div>
			
			<br>
			<br>
			<div class="campoform">
					<label for="email"> E-mail </label>
						<input type="email" id="email" name="E-mail" placeholder="Digite seu email aqui">
					</div>
				   
				   <br>
			       <br>
			
			<div class="campoform">
				<label for="senha">Senha do usuário: </label>
				<input type="password" id="senha" name="senha" placeholder="Insira aqui sua senha" maxlength="6">
				
            </div>
			<br>
			<br>
			
			<div class="cadastro"> 
				<button>  Cadastrar-se  </button>
			</div>
			<br>
			<br>
			</form>

            </main>

	<footer>
        <img src="imagens/logo.png" alt="Eloysa Beauty Secrets" class = "imgFooter">
        <br>
        <a class="navform" href="forms.php">cadastre-se aqui</a>
        <p>(77) 927284792</p>
        <p>eloysasbeatysecrets@gmail.com</p>
    </footer>

</body>
</html>
