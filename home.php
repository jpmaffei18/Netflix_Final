<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/0d5f8cc3c1312e1f7c94b4ccf48733c0?family=Netflix+Sans+Icon" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css"
        integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/icon.css">
    <link rel="stylesheet" href="assets/css/section-tv.css">
    <link rel="stylesheet" href="assets/css/download-section.css">
    <link rel="stylesheet" href="assets/css/section-kids.css">
    <link rel="stylesheet" href="assets/css/facilidades.css">
    <link rel="stylesheet" href="assets/css/duvidas.css">
    <link rel="stylesheet" href="assets/css/footer-endpage.css">
    <title>Netflix</title>
    <link rel="icon" href="assets/img/favicon.ico">
</head>

<body>

    <header class="header">
        <img src="./assets/img/Netflix-Logo.wine.svg" alt="Netflix-Logo" class="netflix-logo">
        <div class="idioma-entrar">
            <select name="language" id="language">
                <option value="pt">Português</option>
                <option value="eg">English</option>
            </select>
            <a href="http://localhost:8080/senac_php3/netflix/netflix.php" class="entrar">Entrar</a>
        </div>
    </header>

    <main>
        <div class="dados">
            <h1>Filmes, séries e muito mais. Sem limites.</h1>
            <h2>Assista onde quiser. Cancele quando quiser.</h2>
            <form action="get" class="email">
                <h3>Pronto para assistir? Informe seu email para criar ou reiniciar sua assinatura.</h3>
                <input type="email" class="info-email" id="email" required>
                <input type="submit" value="Vamos Lá" class="vamos-la" onclick="location.href='signup.php'" >

                <label for="email" class="email-place">Email</label>
            </form>
        </div>
    </main>

    <section class="section-tv">
        <div class="container-tv">
            <div class="texto">
                <h1>Aproveite na TV.</h1>
                <h2>Assista em Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, aparelhos de Blu-ray e outros
                    dispositivos.</h2>
            </div>
            <div class="img-video">
                <img src="./assets/img/tv-netflix.png" alt="tv-netflix" class="tv-img1">
                <video autoplay playsinline loop muted class="video-tv">
                    <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v">
                </video>
            </div>
        </div>
    </section>

    <section class="download-section">
        <div class="download-mobile">
            <img src="./assets/img/mobile-netflix.jpg" alt="Netflix-Mobile" class="serie-download">
            <div class="download-check">
                <img src="./assets/img/boxshot.png" alt="box-shot-stranger-things">
                <div class="down-info">
                    <p class="titulo-serie">Stranger Things</p>
                    <p class="downloading">Download em andamento...</p>
                </div>
                <img src="./assets/img/download-icon.gif" alt="gif-download-gif" class="icon-download">
            </div>
      
            <div class="texto-mobile">
                <h1>Baixe séries para assistir offline.</h1>
                <h2>Salve seus títulos favoritos e sempre tenha algo para assistir.</h2>
            </div>
        </div>   
    </section>

    <section class="facilidades">
        <div class="detalhes">
            <div class="texto-facilidades">
                <h1>Assista quando quiser.</h1>
                <h2>Assista no celular, tablet, Smart TV ou notebook sem pagar a mais por isso.
                </h2>
            </div>
            <div class="img-video">
                <img src="./assets/img/device-pile.png" alt="dispositivos-mobiles">
                <video autoplay playsinline loop muted class="video-mobile">
                    <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices.m4v">
                </video>
            </div>
        </div>
    </section>

    <section class="kids">
        <div class="container-kids">
            <div class="kids-info">
                <img src="./assets/img/kidscrianca.png" alt="for-kids">
            </div>
            <div class="kid-texto">
                <h1>Crie perfis para crianças.</h1>
                <h2>Deixe as crianças se aventurarem com seus personagens favoritos em um espaço feito só para elas, sem
                    pagar a mais por isso.</h2>
            </div>
        </div>
    </section>

    <section class="duvidas">
        <div class="respostas">
            <h1>Perguntas frequentes</h1>
            <button class="accordion">O que é Netflix</button>
            <div class="panel">
                <p>A Netflix é um serviço de transmissão online que oferece uma ampla variedade de séries, filmes e
                    documentários premiados em milhares de aparelhos conectados à internet.<br>
                    <br>
                    Você pode assistir a quantos filmes e séries quiser, quando e onde quiser, sem comerciais – tudo por
                    um preço mensal bem acessível. Aqui você sempre encontra novidades. A cada semana, adicionamos novas
                    séries e filmes.
                </p>
            </div>

            <button class="accordion">Quanto Custa a Netflix?</button>
            <div class="panel">
                <p>Assista à Netflix no seu celular, tablet, Smart TV, notebook ou aparelho de streaming por uma taxa
                    mensal única. Os planos variam de R$25,90 a R$55,90 por mês. Sem contrato nem taxas extras.</p>
            </div>

            <button class="accordion">Onde posso assistir?</button>
            <div class="panel">
                <p>Assista onde quiser, quando quiser. Faça login com sua conta Netflix em netflix.com para começar a
                    assistir no computador ou em qualquer aparelho conectado à Internet compatível com o aplicativo
                    Netflix, como Smart TVs, smartphones, tablets, aparelhos de streaming e videogames.<br>
                    <br>
                    Você também pode baixar a sua série favorita com o aplicativo Netflix para iOS, Android ou Windows
                    10. Use downloads para levar a Netflix para onde quiser sem precisar de conexão com a Internet. Leve
                    a Netflix com você para qualquer lugar.
                </p>
            </div>

            <button class="accordion">Como faço pra cancelar?</button>
            <div class="panel">
                <p>A Netflix é flexível. Não há contratos nem compromissos. Você pode cancelar a sua conta na internet
                    com apenas dois cliques. Não há taxa de cancelamento – você pode começar ou encerrar a sua
                    assinatura a qualquer momento.</p>
            </div>

            <button class="accordion">O que posso assistir na Netflix?</button>
            <div class="panel">
                <p>A Netflix tem um grande catálogo de filmes, documentários, séries, originais Netflix premiados e
                    muito mais. Assista o quanto quiser, quando quiser.</p>
            </div>

            <button class="accordion">A Netflix é adequada para crianças?</button>
            <div class="panel">
                <p>A experiência infantil da Netflix faz parte da sua assinatura para que as crianças se divirtam em seu
                    próprio espaço com séries e filmes familiares sob a supervisão dos responsáveis.<br>
                    <br>
                    O recurso de controle parental, incluso nos perfis para crianças e protegido por PIN, permite
                    restringir a classificação etária do conteúdo que as crianças podem ver e bloquear títulos
                    específicos que você não quer que elas assistam.
                </p>
            </div>
            <form action="get" class="email">
                <h2>Pronto para assistir? Informe seu email para criar ou reiniciar sua assinatura.</h2>
                <input type="email" class="info-email" id="email-duvidas">
                <button class="vamos-la">
                    <span>
                        Vamos lá
                    </span>
                </button>
                <label for="email" class="email-place">Email</label>
            </form>
        </div>
    </section>
    <footer class="end-page">
        <div class="footer-end">
            <div class="footer">
                <p> Dúvidas? Ligue 0800 591 8942</p>
                <ul class="list">
                    <li class="footer-list"> <a href="#" class="footer-link">Perguntas frequentes </a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Centro de ajuda</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Conta </a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Media center </a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Relações com investidores</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Carreiras</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Resgatar cartão pré-pago</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Comprar cartão pré-pago</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Forma de assistir </a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Termo de uso</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Privacidade </a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Preferências de cookies </a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Informação corporativa</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Entre em contato</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Teste de velocidade</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Avisos legais</a> </li>
                    <li class="footer-list"> <a href="#" class="footer-link">Só na Netflix</a> </li>
                </ul>
            </div>
    
            <div class="idioma-footer">
                <select name="language" id="language-footer">
                    <option value="pt">Português</option>
                    <option value="eg">English</option>
                </select>
            </div>
            <p class="netflix-brasil">Netflix Brasil</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/c956011b77.js" crossorigin="anonymous"></script>
    <script src="./assets/JS/accordion.js"></script>
</body>

</html>