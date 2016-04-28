<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="description" content="" />
    <link href="img/icon-tab.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen and (min-width: 768px)">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Photo Lovers - Cabines de Fotos</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- vitrine -->
    <link rel="stylesheet" type="text/css" href="css/vitrine/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/vitrine/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/vitrine/owl.transitions.css">
    <!-- vitrine -->
  </head>
  <body>
    <div class="container-fluid pd-none">
        <?php include 'inc/header.php'; ?>
        <!-- Home - Efeito de página individual -->
        <?php include 'home.php'; ?>
       <!--  <section id="home" class="container-default">
            <div class="bloco-conteudo-abs">
                <?php //include 'home.php'; ?>
            </div>
        </section> -->
        <!-- Home - Fim efeito de página individual -->

         <!-- Sobre Nos - Efeito de página individual -->
        <section id="sobre-nos" class="container-default img-fundo-sobre-nos bgParallax" data-speed="15">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'sobre-nos.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
        <!-- Sobre Nos - Fim efeito de página individual -->

        <!-- Efeito de página individual -->
        <section id="produtos" class="container-default img-fundo-produtos">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'produtos.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
            <section id="produto-espelho" class="container-default container-default-produtos img-fundo-produto-espelho">
                <div class="bloco-conteudo-abs">
                    <div class="bloco-conteudo">
                        <?php include 'produto-espelho.php'; ?>
                    </div>
                </div>
            </section>
            <section id="produto-cabine-fotos" class="container-default container-default-produtos img-fundo-produto-likesantos">
                <div class="bloco-conteudo-abs">
                    <div class="bloco-conteudo">
                        <?php include 'photo-like-santos.php'; ?>
                    </div>
                </div>
            </section>
            <section id="produto-cabine-depoimentos" class="container-default container-default-produtos img-fundo-produto-depoimento">
                <div class="bloco-conteudo-abs">
                    <div class="bloco-conteudo">
                        <?php include 'cabine-depoimento.php'; ?>
                    </div>
                </div>
            </section>
            <section id="produto-photogram" class="container-default container-default-produtos img-fundo-produto-photogram">
                <div class="bloco-conteudo-abs">
                    <div class="bloco-conteudo">
                        <?php include 'photogram.php'; ?>
                    </div>
                </div>
            </section>
            <!-- <section id="produto-videocrazy" class="container-default container-default-produtos img-fundo-produto-videocrazy">
                <div class="bloco-conteudo-abs">
                    <div class="bloco-conteudo">
                        <?php //include 'videocrazy.php'; ?>
                    </div>
                </div>
            </section> -->
        </section>

        <!-- <section id="produto-espelho" class="container-default img-fundo-produto-espelho">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <?php //include 'produto-espelho.php'; ?>
                </div>
            </div>
        </section> -->
        <!-- Fim efeito de página individual -->

        <!-- Efeito de página individual -->
        <section id="diferenciais" class="container-default img-fundo-diferencias">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'diferenciais.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
        <!-- Fim efeito de página individual -->

        <!-- Efeito de página individual -->
        <section id="clientes" class="container-default img-fundo-clientes">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'clientes.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
        <!-- Fim efeito de página individual -->

        <!-- Efeito de página individual -->
        <section id="galeria" class="container-default img-fundo-galeria">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'galeria.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
        <!-- Fim efeito de página individual -->

        <!-- Efeito de página individual -->
        <section id="orcamento" class="container-default img-fundo-orcamento">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'orcamento.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
        <!-- Fim efeito de página individual -->

        <!-- Efeito de página individual -->
        <section id="rodape" class="container-default img-fundo-rodape">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'footer.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
        <!-- Fim efeito de página individual -->
        <div class="bloco-direitos">
            <div class="row mg-none">
                <p class="txt-footer">
                    PHOTOLOVERS @ COPYRIGHT 2016. TODOS OS DIREITOS RESERVADOS.<br>DESIGNED BY JULIANA ALIA<br>
                    DEVELOPED BY <a href="http://www.planobweb.com.br/" target="_blank">PLANOBWEB</a>
                </p>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow-funcao.js"></script>
    <!-- vitrine -->
    <script src="js/vitrine/owl.carousel.js"></script>
    <script src="js/lightbox.js"></script>
    <!-- vitrine -->
    <script src="js/funcoes.js"></script>
    <script src="js/geral.js"></script>
</body>
</html>