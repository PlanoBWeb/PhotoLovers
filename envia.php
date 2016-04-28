<?php 

    if ( empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['data']) || empty($_POST['publico']) || empty($_POST['onde']) || empty($_POST['tipo']) ) {
        echo "Preencha todos os campos e envie novamente!";
    } else {  

        $emailsender = "contato@photolovers.fot.br";
        $emaildestinatario = "brunno@planobweb.com.br";
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
        '
        <table cellpadding="0" cellspaccing="0" border="0">
         <tr>
            <td>
                <font face="Arial" size="5" color="#000000"><strong>
                    ORÇAMENTO DO SITE
                </strong></font><br/>
            </td>
         </tr>
         <tr>
            <td><img src="http://www.photolovers.fot.br/assinaturas/img/0.gif" width="1" height="10"></td>
         </tr>
         <tr>
            <td colspan="2"><img src="http://www.photolovers.fot.br/assinaturas/img/barra.gif" width="500" height="2"></td>
         </tr>
         <tr>
            <td><img src="http://www.photolovers.fot.br/assinaturas/img/0.gif" width="1" height="10"></td>
         </tr>
         <tr>
            <td align="left"><a href="http://www.photolovers.fot.br/" target="_target"><img src="http://www.photolovers.fot.br/assinaturas/img/photo-lovers.gif" border="0"></a></td>
         </tr>
         <tr>
            <td><img src="http://www.photolovers.fot.br/assinaturas/img/0.gif" width="1" height="60"></td>
         </tr>
         <tr>
            <td>
                <font face="Arial" size="3" color="#000000">
        '.
        'Nome: ' . $nome
       .'<br/>E-mail: ' . $email
       .'<br/>Telefone: ' . $telefone
       .'<br/>Data: ' . $data
       .'<br/>Público: ' . $publico
       .'<br/>Onde nos encontrou: '
       .'<br/>Tipo do evento: '
       .'<br/>Mensagem: ' . $msg
       .'
               </font>
            </td>
         </tr>
        </table>
       '
       ; 

        $emailEnvia  = "contato@photolovers.fot.br";
        $comcopia = "contato@planobweb.com.br";

        $headers = "MIME-Version: 1.1" .$quebra_linha;
        $headers .= "Content-type: text/html; charset=UTF-8" .$quebra_linha;
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