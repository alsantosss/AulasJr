<h2>Manipulação de <code>strings</code></h2>

<hr>
<h3>01 . Explode .. divide uma string em strings</h3>

<code>
	$nome="Andre Santos";
<br>
	$x = explode(" ", $nome);
<br>
	print_r($x);

</code>
<pre>
<?php 
	$nome="Andre Santos";
	$x = explode(" ", $nome);
	print_r($x);

 ?>
</pre>
 <hr>
 <!-- *********************************************************************************************************** -->
<h3>02 . Implode .. Une um array de strings, utilizando um caractere especificado na função</h3>

<code>
	$nome=array("Andre", "Santos");
<br>
	$x = implode("!", $nome);
<br>
	print_r($x);

</code>
<pre>
<?php 
	$nome1=array("Andre", "Santos");
	$x1 = implode($nome1, "!");
	print_r($x1);

 ?>
</pre>
<!-- **************************************************************************************************************** -->
<hr>
<h3>03 . Substr() .. Usado para contar strings de uma variável </h3>
<h4>À partir da primeira letra</h4>
<code>
	$nome="Andre Santos";
<br>
	$x = substr($nome, 0,3);
<br>
	print_r($x);

</code>
<pre>
<?php 
	$nome="Andre Santos";
	$x = substr($nome, 0,3);
	print_r($x);

 ?>
</pre>
<h4>À partir da última letra</h4>
<code>
	$nome="Andre Santos";
<br>
	$x = substr($nome, 0,-4);
<br>
	print_r($x);

</code>
<pre>
<?php 
	$nome="Andre Santos";
	$x = substr($nome, 0,-4);
	print_r($x);

 ?>
</pre>
<hr>
<h3>04 . Ucfirst() Ucwords().. Convertem, respectivamente o primeiro caractere em maiúscula </h3>
<h4>Ucfirst(), converte o primeiro caractere da frase ou string</h4>
<code>
	$nome="andre santos";
<br>
	$x = ucfirst($nome);
<br>
	print_r($x);

</code>
<pre>
<?php 
	$nome="andre santos";
	$x = ucfirst($nome);
	print_r($x);

 ?>
</pre>
<h4>Ucwords(), converte cada palavra da string em maiúscula</h4>
<code>
	$nome="andre santos";
<br>
	$x = ucwords($nome);
<br>
	print_r($x);

</code>
<pre>
<?php 
	$nome="andre santos";
	$x = ucwords($nome);
	print_r($x);

 ?>
</pre>
<hr>
<h3>05 . Number_format().. Formata números tendo como parametros: </h3>
<h4>number_format(numero,qtd_decimais,"dezenas ,", "milhares .");</h4>
<code>
	$num_padrao_br=number_format(123456,2,",",".");
<br>
	print_r($num_padrao_br);

</code>
<pre>
<?php 
	$num_padrao_br=number_format(123456,2,",",".");
	print_r($num_padrao_br);

 ?>
</pre>
<hr>
<h3>06 . Str_replace().. troca uma string por outra dentro de uma variável </h3>
<h4>str_replace("texto a substituir", "texto pelo qual trocar", variável com o texto a ser substituido)</h4>
<code>
	$nome="andre santos";
<br>
	$x = str_replace("andre","joão",$nome);
<br>
	print_r($x);

</code>
<pre>
<?php 
	$nome="andre santos";
	$x = str_replace("andre","joão",$nome);
	print_r($x);

 ?>
</pre>