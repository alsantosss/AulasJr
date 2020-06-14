<h1>Biblioteca CURL</h1>
<p>
Faz requisições em WebServices e Sistemas de pagamento... etc ... <br>
Mais informações sobre essa biblioteca
 <a href="http://rberaldo.com.br/trabalhando-com-a-biblioteca-curl/">[ Aqui ]</a> e 
 <a href="https://www.php.net/manual/pt_BR/book.curl.php"> [ Aqui ]</a>
</p>
<br><hr>
<?php
$pagina = "http://www.checkitout.com.br/wb/pingpong";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $pagina);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, "email=alsantosss@hotmail.com&senha=123");

curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec ($ch);

print_r($resposta);

curl_close($ch);
?>