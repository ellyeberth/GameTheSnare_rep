<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--CSS bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="../img/img-title.png" type="image/x-icon">

    <title>Mais Jogos</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="mais">
    <header class="Menu">
        <ul class="header-container">
            <li><a href="../index.php">Início</a></li>
            <li class="dropdown">
                <button class="botao-nivel" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Níveis
                </button>
                <p class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="./nivel-teste.php">Nível Teste</a>
                    <a class="dropdown-item" href="./nivel-1.php">Nível 1</a>
                    <a class="dropdown-item" href="./nivel-2.php">Nível 2</a>
                    <a class="dropdown-item" href="./nivel-3.php">Nível 3</a>
                    <a class="dropdown-item" href="" value="mais" onclick="ClickMouseBotaoMais()">Mais</a>
                    <script>
                        function ClickMouseBotaoMais() {
                            alert("A vida nem sempre é tão fácil. Jogue The Snare para ter mais experiência! :)")
                        }
                    </script>
                </p>
            </li>
            <li><a href="../header/feedback.php">Feedback</a></li>
            <li><a href="../header/suporte.php">Suporte</a></li>
            <li class="dropdown">
                <button class="botao-contato" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contato
                </button>
                <p class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" target="_blank" href="https://api.whatsapp.com/send?phone=5588988120144&text=Olá,%20vim%20pelo%20Website%20The%20Snare%20-%20O%20jogo%20de%20Enigma,%20e%20estou%20entrando%20em%20contato...">
                        <img class="contato-img" src="../img/whatsapp.png" alt="Imagem Whatsapp">Whatsapp
                    </a>
                    <a class="dropdown-item" target="_blank" href="https://www.instagram.com/eu_llyeberthleandro/">
                        <img class="contato-img" src="../img/instagram.png" alt="Imagem Instagram">Instagram
                    </a>
                    <a class="dropdown-item" target="_blank" href="mailto:ellyeberthleandro2777@gmail.com">
                        <img class="contato-img" src="../img/gmail.png" alt="Imagem Gmail">Email
                    </a>
                </p>
            </li>
            <li><a href="../header/mais.php">Mais</a></li>
        </ul>
    </header>

    <section class="parallax section-1-mais">
        <h1 class="mais">Mais jogos</h1>
    </section>

    <section class="parallax section-2-mais">

        <div class="jogos">
            <p>
                Jogos de Enigma andam desafiando muitos jogadores. Eles desafiam a inteligência, a paciência e exigem do jogador a mais aplicada atenção, além da habilidade e em muitas vezes conhecimento específico. Existem 3 Jogos de Enigma além do The Snare que quebram a cabeça de muita gente, sendo os mais complexos da Web.
            </p>

            <hr id="linha">
            <img id="notpron" src="../img/notpron.png" alt="Notpron">
            <p>
                Conhecido como o enigma mais difícil da internet. Desenvolvido por David Münnich em 2004, o jogo conta com 140 níveis que misturam lógica, matemática, percepção aguçada e uma série de outros conhecimentos gerais, além de exigir boas habilidades para pesquisas no Google.
            </p>

            <form action="http://notpron.org/notpron/?" method="get" target="_blank">
                <button type="submit">Visitar</button>
            </form>
            <section class="clear"></section>

            <hr id="linha">
            <img id="dnbhl" src="../img/do-not-believe-his-lies.png" alt="D-N-B-H-L">
            <p>
                Este Jogo NUNCA FOI TERMINADO POR NINGUÉM. A cada fase do DNBHL o jogador precisa descobrir uma palavra, frase, combinação de números ou códigos para passar para os próximos níveis, que ficam cada vez mais complexos. Tudo isso com ajuda das dicas mínimas que o quebra-cabeça dá.
            </p>

            <form action="https://www.amazon.com.br/Not-Believe-His-Lies-FREE/dp/B00UVC55VQ?" method="get" target="_blank">
                <button type="submit">Baixar</button>
            </form>
            <section class="clear"></section>

            <hr id="linha">
            <img id="decifra" src="../img/decifra-me.png" alt="Decifra-me">
            <p>
                O jogo vai exigir que o usuário selecione o vazio e abuse de ferramentas e pesquisas na internet para não virar almoço de esfinge. A tarefa é difícil e, provavelmente, você não vai chegar ao fim sem ser devorado nenhuma vez. A cada resposta certa, o jogador avança. A cada resposta errada, uma mensagem de perigo aparece na tela. O objetivo aqui é passar por todos os desafios da esfinge sem ser devorado.
            </p>

            <form action="http://decifra.me/?" method="get" target="_blank">
                <button type="submit">Visitar</button>
            </form>
            <section class="clear"></section>
        </div>

        <div class="circulo">
            <img id="notebook" src="../img/notebook.png" alt="Notebook"><br>
            <img id="controle" src="../img/controle.png" alt="Controle ps5"><br>
            <img id="computador" src="../img/computador.png" alt="Computador">
        </div>
    </section>

    <footer class="rodape">
        <h5>Copyright © 2021 The Snare. Todos os direitos reservados.</h3>
            <h5>Criado por Ellyeberth Leandro</h4>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>