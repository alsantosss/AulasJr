<h1>Criptografias</h1>

<hr>
<h3>01 . md5(), criptografa o conteúdo de uma variável passada como parâmetro.</h3>
<code>
	$senha = "minha_senha";<br>
	$cripto = md5($senha);<br>
	print_r($cripto);
</code>
<pre>
<?php
	$senha = "minha_senha";
	$cripto = md5($senha);
	print_r($cripto);
 ?>
</pre>
<hr>
<h3>02 a. base64_encode(), criptografa o conteúdo de uma variável passada como parâmetro.</h3>
<h3>02 b. base64_decode(), criptografa o conteúdo de uma variável passada como parâmetro.</h3>
<code>
	$senha = "minha_senha";<br>
	$base = base64_encode($senha);<br>
	print_r($base);
</code>
<pre>
<?php
	$senha = "minha_senha";
	$base = base64_encode($senha);
	print_r($base);
 ?>
</pre>
<code>
	$basedecode = base64_decode($base);<br>
	print_r($basedecode);
</code>
<?php 
	$basedecode = base64_decode($base);
	echo "<br>";
	print_r($basedecode);
 ?>
 <hr>
 