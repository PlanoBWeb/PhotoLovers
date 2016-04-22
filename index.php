<?php
    define(URL, "http://planobweb/clientes/PhotoLovers/Web/");
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="description" content="" />
    <link href="img/icon-tab.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Photo Like Santos - Cabines de Fotos</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid pd-none">
        <?php include 'inc/header.php'; ?>
        
        <!-- Home - Efeito de página individual -->
        <section id="home" class="container-default img-fundo-home bgParallax bgParallax-home" data-speed="15">
            <div class="bloco-conteudo-abs">
                <div class="bloco-conteudo">
                    <!-- Página aqui -->
                    <?php include 'home.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
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
        </section>
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
                    <?php include 'rodape.php'; ?>
                    <!-- FIm Página aqui -->
                </div>
            </div>
        </section>
        <!-- Fim efeito de página individual -->
        <div class="bloco-direitos">
            <div class="row mg-none">
                <p class="txt-footer">
                    PHOTOLOVERS @ COPYRIGHT 2016. TODOS OS DIREITOS RESERVADOS.<br>DESIGNED BY JULIANA ALIA
                </p>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow-funcao.js"></script>
    <script>
        // var p = $( "#rodape" );

        // ><a href="#sobre-nos" class="link-menu-top">sobre nós</a></li>
        //             <li><a href="#produtos" class="link-menu-top">produtos</a></li>
        //             <li><a href="#diferenciais" class="link-menu-top">diferenciais</a></li>
        //             <li><a href="#home" class="pd-none hidden-xs"><img class="img-logo" src="img/Photo-Like-Santos.png" alt="Photo Like Santos"></a></li>
        //             <li><a href="#clientes" class="link-menu-top">clientes</a></li>
        //             <li><a href="#galeria" class="link-menu-top">galeria</a></li>
        //             <li><a href="#orcamento" class="link-menu-top">orçamento</a></li>


        $('.navbar-nav a').click(function() {

            event.preventDefault();
            var pagina = $(this).attr("href");
           
           switch(pagina){
                case '#sobre-nos': var p = $(pagina).offset().top;
                break;
                case '#produtos': var p = $(pagina).offset().top;
                break;
                case '#diferenciais': var p = $(pagina).offset().top;
                break;
                case '#home': var p = $(pagina).offset().top;
                break;
                case '#clientes': var p = $(pagina).offset().top;
                break;
                case '#galeria': var p = $(pagina).offset().top;
                break;
                case '#orcamento': var p = $(pagina).offset().top;
                break;
           }

            var total = p -  ('+150');
            $('html, body').animate({
                scrollTop: total
            }, 1800);

        });
        
        // $('#').click(function(){
        //     var p = $('#diferenciais').offset().top;
        //     var total = p -  ('+150');
        // });

        // var p = $('#diferenciais').offset().top;
        // var total = p -  ('+150');
        // $('.link-menu-top').click(function(){


        //     $('html, body').animate({
        //         scrollTop: total
        //     }, 1800);



        // });
        //$( "p:last" ).text( "scrollTop:" + p.scrollTop() );
        //alert(p.scrollTop());

        $('.bgParallax').each(function(){
            var $obj = $(this);
            $(window).scroll(function() {
                var yPos = -($(window).scrollTop() / $obj.data('speed')); 
                var bgpos = '50% '+ yPos + 'px';
                // $obj.css('background-position', bgpos );
                $('.bgParallax-home').css('background-position', bgpos );
            }); 
        });

        // Valida Formulário
        function enviardados()
        {
            d = document.contato;

            if(trim(d.fale_nome.value)=="")
            {
                alert("O campo NOME deve ser preenchido!");
                d.fale_nome.focus();
                return false;
            }
            
            if(trim(d.fale_email.value)=="")
            {
                alert("O campo E-MAIL deve ser preenchido!");
                d.fale_email.focus();
                return false;
            }
            
            if(!email(d.fale_email,'')) return false;

            if(trim(d.fale_telefone.value)=="")
            {
                alert("O campo TELEFONE deve ser preenchido!");
                d.fale_telefone.focus();
                return false;
            }
            
            if(trim(d.fale_msg.value)=="")
            {
                alert("O campo MENSAGEM deve ser preenchido!");
                d.fale_msg.focus();
                return false;
            }

            if(trim(d.onde.value)=="" || trim(d.onde.value)== "")
            {
                alert("O campo ONDE NOS ENCONTROU deve ser preenchido!");
                d.onde.focus();
                return false;
            }
            
            d.submit();
        }
    </script>
</body>
</html>