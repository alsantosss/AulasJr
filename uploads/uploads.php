<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Form Upload</title>
		<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>

		<h1>Formulário de Tratamento de Uploads</h1>
		<hr>
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
<hr>
		<form action="" method="post" enctype="multipart/form-data">
			
			<!-- 
					A Váriável MAX_FILE_SIZE do php pode ser alterada atravez de INPUT 
			     	e ter seu valor capturado através do $_FILES['error']['2']
			 -->
			<input type="hidden" name="MAX_FILE_SIZE" value="10000">
			<label>Escolha seu arquivo</label>
			<input type="file" name="arquivo">
			<p>Tamanho máximo: 10000 kb</p>
			<br>
			<br>
			<input type="submit" name="submit" value="Enviar">
		</form>
		
		<?php

		if (isset($_FILES)) {

				if (!empty($_FILES['arquivo']['name'])) {

					$arquivo = $_FILES['arquivo'];

					if ($arquivo['error'] == 2) {
						echo "<div class=\"message danger\"> Arquivo excede ao tamanho definido! </div>";
					}

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