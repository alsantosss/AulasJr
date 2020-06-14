<h2>Manipulação de <code>Arrays</code></h2>

<hr>
<h3>01 . Arraykeys .. Cria um array só com as chaves de um outro array passado como parâmetro.</h3>

<code>
	$array_teste=array(<br>
		"nome" => "Andre Santos",<br>
		"idade" => 43,<br>
		"cidade"=> "Bauru",<br>
		"sexo"=> "masculino"<br>
	);
<br><br>
	$array2 = array_keys($array_teste);
<br><br>
	print_r($array2);

</code>
<pre>
	<?php 
		$array_teste=array(
			"nome" => "Andre Santos",
			"idade" => 43,
			"cidade"=> "Bauru",
			"sexo"=> "masculino"
		);

		$array2 = array_keys($array_teste);
		print_r($array2);
 ?>
</pre>
 <hr>

 <h3>02 . Array_values .. Cria um array só com os valores de um outro array passado como parâmetro.</h3>

<code>
<br><br>
	$array3 = array_values($array_teste);
<br><br>
	print_r($array3);

</code>
<pre>
<?php
		$array3 = array_values($array_teste);
		print_r($array3);
 ?>
</pre>
 <hr>

 <h3>03 a. Array_pop .. Elimina o [ <u>último valor</u> ] de outro array passado como parâmetro. Guardando esse valor em si</h3>
 <h3>03 b. Array_shift .. Elimina o [ <u>primeiro valor</u> ] de outro array passado como parâmetro. Guardando esse valor em si</h3>
<code>
<h5>Conteúdo de <i>array_teste</i></h5>
$array_teste=array(<br>
			"nome" => "Andre Santos",<br>
			"idade" => 43,<br>
			"cidade"=> "Bauru",<br>
			"sexo"=> "masculino"<br>
		);<br>
<br>
	<h5>Pega o último valor contido em <i>$array_teste</i> e guarda em <i>$array4</i>.</h5>
	$array4 = array_pop($array_teste);
<br>
<?php $array4 = array_pop($array_teste); ?>

<br>
	<h5>Exibe o que sobrou em <i>$array_teste</i></h5>
	print_r($array_teste);<br>

<?php print_r($array_teste); ?>

	<h5>Exibe o que <i>$array4</i> passou a conter.</h5>
	print_r($array4);
	<?php print_r($array4); ?>
</code>
 <hr>

 <h3>04 a. Asort() .. Ordena (alfabeticamente) em [ <i><u> ordem crescente </u></i> ] o conteúdo de um array mantendo os índices</h3>
 <h3>04 b. Arsort() .. Ordena (alfabeticamente) em [ <i><u> ordem decrescente </u></i> ] o conteúdo de um array mantendo os índices</h3>

<code>
	$array_nomes = "Andre", "João", "Silvio", "Braga", "Tenório", "Gabriel", "Leonardo";<br>
	asort($array_nomes);
<br><br>
	print_r($array_nomes);

</code>
<pre>
<?php
		$array_nomes = array("Andre", "João", "Silvio", "Braga", "Tenório", "Gabriel", "Leonardo");
		asort($array_nomes);
		print_r($array_nomes);
 ?>
</pre>
<hr>

 <h3>05 . count() .. Conta a quantidade de índices (Ítens) de um array passado como parâmetro.</h3>
<code>

	$contar_array = count($array_nomes);
<br><br>
	print_r($contar_array);

</code>
<pre>
<?php
		$contar_array = count($array_nomes);
		echo "Quantidade de Ítens em print_r: -> ";
		print_r($contar_array);

 ?>
</pre>
<hr>
<h3>05 . in_array() .. Verifica se um determinado valor existe entre os ítens de um array passado como parâmetro.</h3>
<code>
	if(in_array("Andre", $array_nomes)){<br>
		echo "Esse nome está contido no Array referenciado!";<br>
	}else{<br>
		echo "Esse nome não existe no array!";<br>
	}<br>	

</code>
<pre>
<?php
	if(in_array("Andre", $array_nomes)){
		echo "Esse nome está contido no Array referenciado!";
	}else{
		echo "Esse nome não existe no array!";
	}

 ?>
</pre>