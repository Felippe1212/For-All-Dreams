<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM clientes WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM clientes ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
    <link rel="stylesheet" href="Global style.css">
    <link rel="stylesheet" href="style-slide2.css">
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="rodape.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="slide2.css">
    <link rel="stylesheet" href="sobre.css">
    <link rel="stylesheet" href="cookies.css">
    <script src="slide.js" defer></script>

    <!-- Links Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Titulo/Icon -->
    <title>For All Dreams</title>
    <link rel="icon" type="image/x-icon" href="Imagens/llogo.ico">

</head>

<body>

    <!-- backgrond-caixa-1 -->

    <div class="backgrond-caixa-1" id="home">
        <header>
            <div class="menu-content">
                <a href="For All Dreams.html"><img src="Imagens/logo.png" class="logoimg"></a>
                <nav class="header-menu">
                    <ul class="list-itens">
                        <li><a href="For All Dreams2.html">home</a></li>
                        <li><a href="#catalogo">Catálogo</a></li>
                        <li><a href="#garagem">Garagem</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#feedback">Feedback's</a></li>
                        <li><a href="https://wa.me/5514123451234?text=Quero%20comprar%20meu%20carro%20dos%20sonhos!!!!!!!">contato</a></li>
                        <li>
                            <a href="https://www.instagram.com/for_all_dreams/"><img src="Imagens/icons8-instagram-144.png" class="icon-whatsapp"></a>
                        </li>
                        <li><a href="https://wa.me/5514123451234?text=Quero%20comprar%20meu%20carro%20dos%20sonhos!!!!!!!"><img src="Imagens/icons8-whatsapp-96.png" class="icon-whatsapp"></a></li>
                        <li>
                            <div class="user"><img src="Imagens/icons8-usuário-homem-com-círculo-64.png"></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="main-content">
                <h1 class="primary-text">Isso é:</h1>
                <h2 class="second-text">FOR ALL <span>DREAMS</span> </h2>
                <div class="btns">
                    <a href="#garagem"><button class="btn-garagem">Garagem</button></a>
                    <a href="https://wa.me/5514123451234?text=Quero%20comprar%20meu%20carro%20dos%20sonhos!!!!!!!"><button
                            class="btn-contato">contato</button></a>
                </div>
            </div>
        </main>
    </div>

    <div class="backgrond-carrosel-2" id="catalogo">
        <h1 class="primary-text-catalogo">Catálogo For All <span class="span-catalogo">Dreams</span></h1>
        <h1 class="second-text-catalogo">Um pouco do nosso acervo de carros</h1>
        <hr class="hr-catalogo">
        <section class="sliderr">
            <div class="slider-contentt">

                <input type="radio" name="btn-radio" id="radio1">
                <input type="radio" name="btn-radio" id="radio2">
                <input type="radio" name="btn-radio" id="radio3">
                <input type="radio" name="btn-radio" id="radio4">
                <input type="radio" name="btn-radio" id="radio5">


                <div class="slide-boxx primeiroo">
                    <img class="img-desktopp"
                        src="https://directimports.com.br/wp-content/uploads/2023/06/cadillac-escalade-iq-2025-1-64d3d376907bf.webp"
                        alt="slide 1">
                </div>

                <div class="slide-boxx">
                    <img class="img-desktopp"
                        src="https://directimports.com.br/wp-content/uploads/2023/05/audi-r8-spyder-v10-performance-2023-10.webp"
                        alt="slide 3">
                </div>

                <div class="slide-boxx">
                    <img class="img-desktopp"
                        src="https://directimports.com.br/wp-content/uploads/2023/03/chevrolet-corvette-stingray-9.webp"
                        alt="slide 3">
                </div>

                <div class="slide-boxx">
                    <img class="img-desktopp" src="https://directimports.com.br/wp-content/uploads/2023/05/BL5A8543.jpg"
                        alt="slide 3">
                </div>

                <div class="slide-boxx">
                    <img class="img-desktopp"
                        src="https://directimports.com.br/wp-content/uploads/2023/04/alfa-romeo-giulia-quadrifoglio-2023-10.webp"
                        alt="slide 3">
                </div>
            </div>

            <div class="i">
                <div class="nav-manuall">

                    <label for="radio1" class="manual-btn"><img src="Imagens/2023CadillacEscaladeV.png"></label>
                    <label for="radio2" class="manual-btn"><img src="Imagens/AudiR8Spyder.jpg"></label>
                    <label for="radio3" class="manual-btn"><img src="Imagens/chevroletcorvettestingray.jpg"></label>
                    <label for="radio4" class="manual-btn"><img src="Imagens/f-150 shelby.jpg"></label>
                    <label for="radio5" class="manual-btn"><img
                            src="Imagens/alfa-romeo-giulia-quadrifoglio-2023.jpg"></label>

                </div>
            </div>


        </section>
    </div>

    <!-- backgrond-carrosel-1 -->

    <div class="backgrond-carrosel-1" id="garagem">
        <hr class="hr-destaques">
        <h1 class="primary-text-destaques">Destaques For All <span class="span-destaques">Dreams</span></h1>
        <h1 class="second-text-destaques">Conheça mais da nossa garagem</h1>
        <section class="slider">
            <div class="slider-content">

                <a href="Porshe Cayenne Hybrid 2020.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/porscheCayenneFront.jpg" alt="slide 1">
                        <h1 class="descricao-destaques-nome">Porsche Cayenne E-Hybrid</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 700.000,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2020</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="Ferrari F8 Spider.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/Ferrarispiderf8esquerda.png" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Ferrari F8 Spider</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 4.000.000,00</h1>
                        <div class="descricao-destaques-especificacoes">
                            <img src="Imagens/icons-certo.png" class="descricao-destaques-especificacoes-icon">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png"
                                class="descricao-destaques-especificacoes-icon">
                            <h1>2022</h1><img src="Imagens/icons-carro.png"
                                class="descricao-destaques-especificacoes-icon">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="supra.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/2023-toyota-supra.jpg" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Toyota Supra</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 1.199.990,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2023</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="Tesla Model 3 2022.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/TESLA MODEL 3 PERFORMANCE 2022.jpg" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Tesla Model 3 Performace</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 650.174,37</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2022</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
            </div>
            </a>

            <div class="slider-content-2">
                <a href="dodge.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/dodge 1.jpg" alt="slide 1">
                        <h1 class="descricao-destaques-nome">DODGE CHALLENGER 2023</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 1.420.900,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2020</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="Ram 1500 RTX 2023.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/ram1500trx2023esquerda.jpg" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Ram 1500 TRX</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 1.059.000,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2023</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="Toyota Land Cruiser 2023.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/TOYOTALANDCRUISER2023esquerda2.jpg" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Toyota Land Cruiser</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 998.990,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2023</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="rolls.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/rolls1.jpg" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Rolls Royce Ghost</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 4.290.000,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2022</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="slider-content-2">
                <a href="BENTLEY BATUR 2024.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/BentleyBatur2024lado.jpg" alt="slide 1">
                        <h1 class="descricao-destaques-nome">Bentley Batur 2024</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 13.520.900,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2024</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="Ford Mustang Shelby GT500 2023.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/Ford Mustang Shelby GT500 2023 frente.jpg" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Ford Mustang Shelby GT500 2023</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 310.361,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2023</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="ACURA NSX TYPE S 2023.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/ACURANSXTYPES2023frente.jpg" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Acura NSX Type S 2023</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 2.410.000,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2023</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>

                <a href="Chevrolet corvette z06 2022.html">
                    <div class="main-descricao-destaques">
                        <img class="img-desktop" src="Imagens/chevroletcorvettez062022direita.png" alt="slide 3">
                        <h1 class="descricao-destaques-nome">Chevrolet corvette Z06</h1>
                        <hr class="hr-destaques-2">
                        <hr class="hr-destaques-3">
                        <h1 class="descricao-destaques-valor">R$: 2.590.000,00</h1>
                        <div class="descricao-destaques-especificacoes"><img src="Imagens/icons-certo.png">
                            <h1>Pronta Entrega</h1><img src="Imagens/icons-calendário.png">
                            <h1>2023</h1><img src="Imagens/icons-carro.png">
                            <h1>Novo</h1>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <div class="main-content-sobre" id="sobre">
        <h1 class="primary-text-catalogo">Sobre For All <span class="span-catalogo">Dreams</span></h1>
        <h1 class="second-text-catalogo">Um pouco mais da nossa empresa</h1>
        <div class="sobre">
            <div class="img-sobre">
                <img src="Imagens/BMW-Série-3-862x485.jpg">
            </div>
            <div class="texto-sobre">
                <h1>A empresa "For All Dreams" é uma concessionária especializada na venda de carros de luxo. Seu foco
                    principal é proporcionar aos clientes uma experiência excepcional ao adquirir veículos de alta
                    qualidade e prestígio. Com uma ampla gama de carros de luxo em seu portfólio, a empresa atende a uma
                    clientela que valoriza a exclusividade, o desempenho superior e o design sofisticado. <br><br>



                    O compromisso da "For All Dreams" com a qualidade é evidente em seu processo de inspeção rigoroso,
                    garantindo que cada veículo esteja em perfeitas condições antes de ser disponibilizado para venda.
                    Além disso, a empresa preza pela transparência nos negócios, fornecendo informações detalhadas sobre
                    cada veículo, incluindo histórico de manutenção e registro, para que os clientes possam tomar
                    decisões informadas. <br><br>



                    A empresa também se destaca pelo atendimento ao cliente excepcional, contando com uma equipe de
                    vendas altamente treinada e dedicada a auxiliar os clientes na escolha do carro de luxo dos seus
                    sonhos. Além disso, "For All Dreams" oferece opções de personalização para atender às preferências
                    individuais de seus clientes, tornando realidade os sonhos automobilísticos mais específicos.
                    <br><br>



                    No mercado altamente competitivo de carros de luxo, "For All Dreams" construiu uma reputação sólida
                    baseada na satisfação dos clientes e na qualidade de seus produtos. A empresa é conhecida por seu
                    compromisso com a excelência e seu papel como um destino confiável para quem procura carros de luxo
                    de alto padrão.</h1>
            </div>
        </div>
    </div>


    <h1 class="primary-text-catalogo">Feedba<span class="span-catalogo">ck's</span></h1>
    <h1 class="second-text-catalogo">Feedback's dos nossos clientes</h1>
    <hr class="fed-hr-0">
    <div class="main-content-feedback">
        <div class="fed">
            <img src="Imagens/TOYOTALANDCRUISER2023esquerda2.jpg">
            <h1>Roberto da Silva</h1>
            <hr class="fed-hr-1">
            <hr class="fed-hr-2">
            <h2><span class="fed-span">"</span>Adorei o atendimento por parte da impreza e da praticidade da realizacao dos documentos e na velocidade da entrega do veiculo<span class="fed-span">"</span></h2>
        </div>
    </div>


    <!-- Rodape -->

    <hr class="hr-rodape">

    <div class="main-content-rodape">
        <div class="opa">
            <div class="rodape-imglogo-nome">
                <a href="#home"><img src="Imagens/logo.png" class="imgrodape"></a>
            </div>
            <div class="menu-content-rodape-contatos-status">
                <a href="https://maps.app.goo.gl/tV3de11UNfC9RQBe9">
                    <h1><img src="Imagens/icons8-local-96.png">Praça da República, 53 - Centro - CEP 01045-903 - São
                        Paulo/SP - Brasil</h1>
                </a>
                <a href="https://wa.me/5514123451234?text=Quero%20comprar%20meu%20carro%20dos%20sonhos!!!!!!!">
                    <h1><img src="Imagens/icons8-telefone-100.png">(14) 12345-1234</h1>
                </a>
                <a href="https://wa.me/5514543214321?text=Quero%20comprar%20meu%20carro%20dos%20sonhos!!!!!!!">
                    <h1><img src="Imagens/icons8-whatsapp-100.png">(14) 54321-4321</h1>
                </a>
            </div>
            <div class="menu-content-rodape-contatos-redes-social">
                <h1>Redes Sociais</h1>
                <a href="https://www.instagram.com/for_all_dreams/"><img src="Imagens/icons8-instagram-150.png"
                        class="icon-instagram"></a>
                <a href="https://www.youtube.com/channel/UCZBZhof1ZWN9MX4SS8oETEQ"><img
                        src="Imagens/icons8-reproduzir-youtube-100.png"></a>
                <a href=""><img src="Imagens/icons8-facebook-100.png"></a>
            </div>
        </div>
        <div class="rodape">

            <h1 class="rodape-nome-paginas">Páginas</h1>

            <div class="menu-content-rodape-paginas">

                <div class="menu-content-rodape-paginas-ids">
                    <a href="#home">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Home</h2>
                        </div>
                    </a>
                    <a href="#catalogo">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Catalogo</h2>
                        </div>
                    </a>
                    <a href="#garagem">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Garagem</h2>
                        </div>
                    </a>
                    <a href="#feedback">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Feedback</h2>
                        </div>
                    </a>
                </div>
                <div class="menu-content-rodape-paginas-ids">
                    <a href="#sobre">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Sobre</h2>
                        </div>
                    </a>
                    <a href="https://wa.me/5514543214321?text=Quero%20comprar%20meu%20carro%20dos%20sonhos!!!!!!!">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Contato</h2>
                        </div>
                    </a>
                    <a href="#instagram">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Instagram</h2>
                        </div>
                    </a>
                    <a href="login.html">
                        <div class="img-desktop-rodape">
                            <img src="Imagens/icons-quadrado.png">
                            <h2>Login</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="direitos-reservados">
        <h1>For All Dreams 2023 © Todos os direitos reservados.</h1>
    </div>











    <!-- Cookies -->

    <div class="cookies-msg" id="cookies-msg">
        <h1 class="cookies-marca">For All Dreams</h1>
        <div class="cookies-txt">
            <p>Este site usa cookies e tecnologias afins, que são pequenos arquivos ou pedaços de texto baixados
                para um
                aparelho quando o visitante acessa um website ou aplicativo. Ao utilizar nosso site você está de
                acordo
                com a utilização dos cookies para te proporcionar uma melhor experiência.<br>
                <a href="#lincenca" class="">Ver termos de licença</a>
            </p>

            <div class="cookies-btn">
                <button onclick="aceito()">Aceito</button>
            </div>
        </div>
    </div> <!--cookies-msg-->

    <script src="cookies.js"></script>

</body>

</html>