<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css"/>

    <title>Contato</title>
</head>

<body>
    <header class="header">
        <a href="index.html"><img src="logo3.png"  alt="logoCooperatec"></a>
        <nav>
        <ul class="menu">
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="loja.html">Loja</a></li>
            <li><a href="carrinho.html">Carrinho</a></li>
            <li><a href="pedidos.html">Pedidos</a></li>
            <li><a href="busca.html">Busca</a></li>
            <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
        </header>
            <div class="sucesso">
                <h3>Sua mensagem foi enviada com sucesso. Em breve entraremos em contato! ;)</h3>
                <img src="sucesso.png" alt="confirma_envio">
                
            </div>

<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "cooperatec@gmail.com";
$subject = "Contato - Cooperatec";
$body = "Nome".$nome. "\r\n".
        "Email".$email. "\r\n".
        "Mensagem".$mensagem;
$header = "From:thalitazm@gmail.com"."\r\n"
        ."Reply-To:".$email."\r\n"
        ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("");

}else{
echo("O email não pode ser enviado. Tente novamente.");
}


}

?>

<footer>
        <div class="footer">
            <h3>Acompanhe nossas redes sociais</h3>
            <p>©2020 Cooperatec. Todos os direitos reservados</p>
            
            <ul class="social">
                <li><a href="https://www.facebook.com/Etecvestibulinho/"><img src="fb.png" alt="facebook"></a></li>
                <li><a href="https://www.instagram.com/etecastordemattoscarvalho/"><img src="ig.png" alt="instagram"></a></li>
                <li><a href="https://www.youtube.com/"><img src="youtube.png" alt="youtube"></a></li>
                <li><a href="https://www.web.whatsapp.com/"><img src="whatsapp.png" alt="whatsapp"></a></li>
            </ul>
        </div>
    </footer>
    
</body>
</html>


