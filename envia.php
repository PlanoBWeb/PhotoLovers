<?php 

    if ( empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['data']) || empty($_POST['publico']) || empty($_POST['onde']) || empty($_POST['tipo']) ) {
        echo "Preencha todos os campos e envie novamente!";
    } else {  

        $emailsender = "contato@photolovers.fot.br";
        $emaildestinatario = "contato@photolovers.fot.br";
        $pagina = "Photo Lovers - Contato do site";

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $publico = $_POST['publico'];
        $onde = $_POST['onde'];
        $tipo = $_POST['tipo'];
        $msg = $_POST['msg'];

        if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
        else $quebra_linha = "\n"; //Se "nÃ£o for Windows"

        $mensagemHTML = 
        'Nome: ' . $nome . $quebra_linha 
       .'E-mail: ' . $email . $quebra_linha
       .'Telefone: ' . $telefone . $quebra_linha
       .'Data: ' . $data . $quebra_linha
       .'Público: ' . $publico . $quebra_linha
       .'Onde nos encontrou: ' . $onde . $quebra_linha
       .'Tipo do evento: ' . $tipo . $quebra_linha
       .'Mensagem: ' . $msg . $quebra_linha
       ; 

        $emailEnvia  = "contato@photolovers.fot.br";
        $comcopia = "atendimento@planobweb.com.br";

        $headers = "MIME-Version: 1.1" .$quebra_linha;
        $headers .= "Content-type: text/plain; charset=UTF-8" .$quebra_linha;
        $headers .= "From: " . $email.$quebra_linha;
        $headers .= "Bcc: " . $comcopia . $quebra_linha;
        $headers .= "Reply-To: " . $emailEnvia . $quebra_linha;

        if(!mail($emaildestinatario,$pagina, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
            $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
            mail($emaildestinatario,$pagina, $mensagemHTML, $headers );
        }

        echo "Obrigado, em breve entraremos em contato!";
        //echo utf8_decode("<script>alert('Obrigado, em breve entraremos em contato!');location.href ='index.php';</script>");
    }