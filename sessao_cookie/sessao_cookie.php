<?php
session_start();
$_SESSION = array(
	'user' => 'André',
	'auth' => '2'
);
$user = $_SESSION['user'];
// print_r($user);
// print_r($_SESSION['auth']);
?>
<h1>Uso de sessões e cookies</h1>
<p>
	Sessões são usadas como identificadores registrados no servidor, são arrays que possibilitam guardar informações <br>
importantes, como logins, tokens, etc...<br>


</p>
<code>
	session_start();<br><br>
	$_SESSION = array(<br>
		'user' => 'André',<br>
		'auth' => '2'<br>
	);<br><br>
	$user = $_SESSION['user'];<br><br>
	print_r($user);<br>
	<?php print_r($user); ?>
	<br><br>
	print_r($_SESSION['auth']);<br>
	<?php print_r($_SESSION['auth']); ?>
	<br>
</code>
<hr>
<h1>Coockies</h1>
<p>
	Cookies são usadas como identificadores registrados no navegador cliente, são arrays que também possibilitam guardar <br>
	informações importantes, como logins, tokens, etc... <br>
	A duração do cookie no navegador cliente é setada em segundos... portanto 60seg * 60 min = 3600segundos... ou 1 hora.<br>
	Se configurado para 0, ou omitido, o cookie irá expirar ao fim da sessao (quando o navegador fechar).<br>

	<div style="padding: 5px; width: 500px; border: 1px solid black;">
		<b>Obs.:</b> Para Excluir um cookie:<br>
		Esvazie e negative o tempo de expiração <br>
		<code>
			setcookie("meu_teste", "", time()-3600); <br>
		</code>
	</div>

</p>
<code>
	setcookie("meu_teste", "Fulano de Tal", time()+3600);<br>
	print_r($_COOKIE["meu_teste"]);
</code>
<br><br>
<?php 
setcookie("meu_teste", "Fulano de Tal", time()+3600);
echo "O cookie setado foi --> ".$_COOKIE["meu_teste"];
echo "<br><pre>";
print_r($_COOKIE);

echo "<br></pre>";
 ?>

