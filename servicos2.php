<?php

	require "servicos.php";

	if(isset($_GET["i"])){

		$i = $_GET["i"];
		$f = $procedimentos[$i];

	}else{
		//redireciona uma página para o endereço solicitado.
		header("location: index.php");
		die; //sempre utilizar o die após o redirecionamento.
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Procedimentos</title>
	<link rel="stylesheet" type="text/css" href="servicos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="cartao">
    <header>
        <h1>Procedimentos</h1>
    </header>	
		
		    <div class="card">
			<img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
            <h2><?=$f["nome"]?></h2>
			<p class="desc"><?=$f["descricao"]?></p>
            <p><?=$f["serviços"]?></p>
			
		    </div>
            <a href="index.php" class="link">Voltar</a>
    </div>

    <footer>
        <img src="imagens/logo.png" alt="Eloysa Beauty Secrets" class = "imgFooter">

        <a class="navform" href="forms.php">cadastre-se aqui</a>
        <p>(77) 927284792</p>
        <p>eloysasbeatysecrets@gmail.com</p>
    </footer>

</body>
</html>
