<?php 
    
    if ($_POST['acao'] == "assine-news") {
        if (empty($_POST['nome_news'])|| empty($_POST['email_news'])) {
            header("Location: home"); 
        } else {  

            $emailsender = "contato@bdasolutions.com.br";
            $emaildestinatario = "contato@bdasolutions.com.br";
            $pagina = "Bda Solutions - Newsletter";

            $nome = $_POST['nome_news'];
            $email = $_POST['email_news'];

            if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
            else $quebra_linha = "\n"; //Se "nÃ£o for Windows"

            $mensagemHTML = 
            'Nome:' . $nome . $quebra_linha 
           .'E-mail' . $email . $quebra_linha; 

            $emailEnvia  = "contato@bdasolutions.com.br";
            $comcopia = "contato@planobweb.com.br";

            $headers = "MIME-Version: 1.1" .$quebra_linha;
            $headers .= "Content-type: text/plain; charset=UTF-8" .$quebra_linha;
            $headers .= "From: " . $emailEnvia.$quebra_linha;
            $headers .= "Bcc: " . $comcopia . $quebra_linha;
            $headers .= "Reply-To: " . $emailEnvia . $quebra_linha;

            if(!mail($emaildestinatario,$pagina, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
                $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
                mail($emaildestinatario,$pagina, $mensagemHTML, $headers );
            }

            echo utf8_decode("<script>location.href ='obrigado-newsletter'</script>");
        }
    }
    else {
        if (empty($_POST['fale_nome'])|| empty($_POST['fale_email'])|| empty($_POST['fale_telefone'])|| empty($_POST['onde'])|| empty($_POST['fale_msg'])) {
           header("Location: home"); 
        } else { 

            $emailsender = "contato@bdasolutions.com.br";
            $emaildestinatario = "contato@bdasolutions.com.br";
            if (isset($_POST['formFixed'])) {
                $pagina = $_POST['formFixed'];
            }else{
                $pagina = "Bda Solutions";
            }
            

            $nome = $_POST['fale_nome'];
            $email = $_POST['fale_email'];
            $onde = $_POST['onde'];
            $telefone = $_POST['fale_telefone'];
            $msg = $_POST['fale_msg'];
            if ($_POST['interessse']) {
                $interessse = "Interessse: " . $_POST['interessse'];
            }

            if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
            else $quebra_linha = "\n"; //Se "nÃ£o for Windows"

            $mensagemHTML = 
            'Nome:' . $nome . $quebra_linha 
           .'E-mail' . $email . $quebra_linha 
           .'Onde nos encontrou' . $onde . $quebra_linha 
           .'Telefone' . $telefone . $quebra_linha 
           .'Mensagem' . $msg . $quebra_linha 
           . $interessse; 

            $emailEnvia  = "contato@bdasolutions.com.br";
            $comcopia = "contato@planobweb.com.br";

            $headers = "MIME-Version: 1.1" .$quebra_linha;
            $headers .= "Content-type: text/plain; charset=UTF-8" .$quebra_linha;
            $headers .= "From: " . $emailEnvia.$quebra_linha;
            $headers .= "Bcc: " . $comcopia . $quebra_linha;
            $headers .= "Reply-To: " . $emailEnvia . $quebra_linha;

            if(!mail($emaildestinatario,$pagina, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
                $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
                mail($emaildestinatario,$pagina, $mensagemHTML, $headers );
            }

            if ($_POST['pagina'] == "demonstracao") {
                echo utf8_decode("<script>location.href ='obrigado-solicite-demonstracao'</script>");
            }elseif ($_POST['pagina'] == "compre"){
                echo utf8_decode("<script>location.href ='obrigado-compre'</script>");
            }elseif ($_POST['pagina'] == "suporte"){
                echo utf8_decode("<script>location.href ='obrigado-suporte'</script>");
            }elseif ($_POST['pagina'] == "solicite-contato"){
                echo utf8_decode("<script>location.href ='obrigado-solicite-contato'</script>");
            }else{
                echo utf8_decode("<script>location.href ='obrigado-contato'</script>");   
            }
        }
    }

 ?>