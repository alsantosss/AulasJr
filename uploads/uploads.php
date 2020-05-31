<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Form Upload</title>
		<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>

		<h1>Formulário de Tratamento de Uploads</h1>
		<h3>$_FILES</h3>
		<p>Array multidimensional composto por <code>$_FILES['chave']['valor'].</code> </p>
<p>
	<code>
	Chave = name ..... Valor = Contrastados - Sistema Reprodutor Feminino.pdf .<br>
	Chave = type ..... Valor = application/pdf .<br>
	Chave = tmp_name . Valor = /opt/lampp/temp/phpQl4xPT .<br>
	Chave = error .... Valor = 0 .<br>
	Chave = size ..... Valor = 997341 .
	</code>
</p>
		<form action="" method="post" enctype="multipart/form-data">
			
			
			<label>Escolha seu arquivo</label>
			<input type="file" name="arquivo">
			<br>
			<br>
			<input type="submit" name="submit" value="Enviar">
		</form>
		
		<?php

		if (isset($_FILES)) {

				if (!empty($_FILES['arquivo']['name'])) {

					$arquivo = $_FILES['arquivo'];

						foreach ($arquivo as $key => $value) {
							echo "Chave = {$key} e Valor = {$value} . <br>";
						}

					move_uploaded_file($arquivo['tmp_name'], "../assets/img/".$arquivo['name']);
				}
		} else {
			
				echo "Nada foi enviado";
		}
		?>
	</body>
</html>