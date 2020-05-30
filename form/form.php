<!-- Processamento do form na mesma página -->


<!DOCTYPE html>
<html>
	<head>
		<title> Processamento do Form na Mesma Página </title>

		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	</head>
<body>
	<h1> Processamento do form na mesma página </h1>

		<form id="form1" name="form1" method="post">

			<label>Nome</label>
			<input type="text" name="nome">
			<br>
			<br>
			<input type="submit" name="submit" value="Enviar">
		</form>


	<?php
		if (isset($_POST)) {
			echo "A variável esiste <br>";
			if(empty($_POST['nome'])){
				echo "A variavel exixte, porém está vazia";
			}else
			{
				echo "A variável existe e contem dados <br>";
			}
		} else {
			echo "variável não existe";
		}
		
	?>


	<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
/*
	RETORNO:
		array(2) {
		  ["nome"]=>
		  string(5) "andre"
		  ["submit"]=>
		  string(6) "Enviar"
		}
*/
 ?>
	</body>
</html>