<h1>Datas / Explode / Implode / Array reverso</h1>

<p>A função <code>date();</code> possui diversos parametros e formasde usar...<br>
isso pode ser conferido <a href="https://www.php.net/manual/en/function.date.php" target="_blank"> [ Aqui ] </a>.</p>

<p>Guia completo de Data / Hora e TimeStamp <a href="https://www.ramosdainformatica.com.br/programacao/php/como-manipular-data-hora-com-php/" target="_blank">[ Aqui ]</a></p>

<?php

$data_veio_input = "10/04/2004";

$dados = dataParaBanco($data_veio_input);

echo $dados . " => Data que vai para o banco MySql <br> <hr> <br>";


function dataParaBanco($dados = null){
	
	$data_veio_input = $dados;
	
	$data_explode = explode("/", $data_veio_input);

	$data_explode = array_reverse($data_explode);

	$data_vai_banco = implode("-",$data_explode);

	return $data_vai_banco;
}

echo "Uso Comum => ".$data = date("d/m/Y");

$dia_semana = date("l");
echo "<hr><br>Uso por Extenso => " . $dia_semana . ", " . $data;

$dt_escapando_texto = date("d/m/Y \à\s H:i:s");
echo "<hr><br>Escapando texto => " . $dt_escapando_texto;

//var_dump($data_explode);

//print_r($data_vai_banco);
	
	echo "<hr>";

?>