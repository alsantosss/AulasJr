<h1>foreach com for - Array dentro de Array</h1>

<?php
$alunos = array(
	array(
	"nome" => "André",
	"idade" => "43",
	"sexo" => "masculino"
	),
	array(
	"nome" => "José",
	"idade" => "24",
	"sexo" => "masculino"
	),
	array(
	"nome" => "Maria",
	"idade" => "33",
	"sexo" => "feminino"
	)
);
//echo "<pre>";
//print_r($alunos);

for($i=0; $i < count($alunos); $i++){

	foreach($alunos[$i] as $key => $value){
		echo $key . " = " . $value . "<br>";
	}
	
	echo "<hr>";
}
?>