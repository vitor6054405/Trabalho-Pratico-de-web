<?php

    require "servicos.php";

?>

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

    <header> 

        <img src="imagens/logo.png" alt="Eloysa Beauty Secrets">
        <nav>
        <ul>
            <li><a href="index.php">Como Funciona</a></li>
            <li><a href="#tt">Serviços</a></li>
            <li><a href="forms.php">Cliente</a></li>
            <li><a href="empresa.php">Sobre a Empresa</a></li>
        </ul>
        </nav>

    </header>

    <main>
    <div class="inicio">

        <img src="imagens/foto3.png" alt="Beleza e bem-estarno conforto de casa.">

    </div>

    <div class="parte2">
        <div class="sep">
            <div class="somos">
                <h2 id="somosh2">Quem somos?</h2>
                <p class="text">Eloysa's Beauty Secrets é uma plataforma que facilita a busca e o agendamento de serviços de beleza e bem-estar, tornando-os de fácil acesso e permitindo que os clientes recebam o atendimento na comodidade da sua casa ou onde preferir, sem precisar se deslocar.</p>
            </div>
            <img src="imagens/foto2.png" alt="modelo sorrindo">
       </div>
        <h2>Veja porque é seguro receber um profissional Eloysa's Beauty Secrets  em casa.</h2>
    <div class="somos2">
        <img src="imagens/skin.png" alt="produtos da loja">

        <ul class="text">
            <li> Materiais esterilizados e descartáveis.</li>
            <li> Nossas profissionais recebem treinamentos constantes.</li>
            <li> Rígido processo de seleção com testes e análise de documentos.</li>
            <li> Garantimos sua segurança.</li>
        </ul>
    </div>
    </div>


    <div id="tservi">
    <h2 id="tt">Nossos Serviços</h2>
    <div class="servicos">
    <?php
            foreach($procedimentos as $i => $f){

        ?>

		<div class="card">
            <a  href="servicos2.php?i=<?=$i?>">
			    <img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
            </a>
			<h2 class="link"><a href="servicos2.php?i=<?=$i?>">
            <?=$f["nome"]?>
            </a></h2>
			
		</div>
		<?php
            }
        ?>

    </div>
    </div>
    </main>

    <footer>
        <img src="imagens/logo.png" alt="Eloysa Beauty Secrets" class = "imgFooter">

        <a class="navform" href="forms.php">cadastre-se aqui</a>
        <p>(77) 927284792</p>
        <p>eloysasbeatysecrets@gmail.com</p>

    </footer>
    
</body>
</html>
