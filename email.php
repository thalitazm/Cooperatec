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
                <li><a href="pedidos.html">Entrar</a></li>
                <li><a href="contato.html">Contato</a></li>
            <form target="pagseguro" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" method="post">
                <input type="hidden" name="email_cobranca" value="suporte@lojamodelo.com.br" />
                <input type="hidden" name="tipo" value="VER" />
                <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/99x61-carrinho-assina.gif" name="submit" alt="Visualizar carrinho de compras" />
            </form>
            </ul>
        </nav>
    </header>
            <div class="sucesso">
                <h3>Sua mensagem foi enviada com sucesso. Em breve entraremos em contato! ;)</h3>
                <img src="sucesso.png" alt="confirma_envio">
                <h3><a href="index.html">Voltar à página inicial!</a></h3>
                
            </div>

<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "cooperatec.amc@gmail.com";
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
            <ul class="social">
                <li><a href="https://www.facebook.com/Etecvestibulinho/" target="_blank"><img src="fb.png" alt="facebook"></a></li>
                <li><a href="https://www.instagram.com/etecastordemattoscarvalho/" target="_blank"><img src="ig.png" alt="instagram"></a></li>
                <li><a href="https://bit.ly/3fwX0X1" target="_blank"><img src="youtube.png" alt="youtube"></a></li>
                <li><a href="https://bit.ly/3enBy6V" target="_blank"><img src="whatsapp.png" alt="whatsapp"></a></li>
            </ul>
            <h2>Etec Astor de Mattos Carvalho: Rodovia Lourenço Lozano, km 4 • Bairro Restinga</h2>
            <p> CEP 17480-000 - Cabrália Paulista/SP</p>
            <p>©2020 Cooperatec. Todos os direitos reservados</p>
            <p>Este é um projeto feito pelas aulas do curso técnico em informática para internet: Ana Caroline, Giovana, Thalita e Vitória</p>
        </div>
</footer>
    
</body>
</html>


