<h1>
	Biblioteca PDO (Insert)
</h1>

<p>

</p>

<code>
$dsn  = "mysql:dbname=blog;host=localhost";<br>
$user = "root";<br>
$pass = "";<br><br>

try {<br><br>
	
	$pdo = new PDO($dsn, $user, $pass);// Conexão Aberta<br><br>
	
	$nome = "Testando3";<br>
	$email = "teste5@hotmail.com";<br>
	$senha = md5("123");<br><br>

	$sql = "SELECT email FROM usuarios WHERE email = '$email'";<br><br>

	$resultado = $pdo->query($sql);<br><br>

	if (!empty($resultado->fetchAll())) {<br>
		echo "Não vazio = O email já existe";<br>
	}else{<br>
		echo "Vazio = Pode Inserir o registro";<br>
		echo "Resultado = " . print_r($resultado->fetchAll());<br><br>

	// $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";<br><br>

	// $resultado=$pdo->query($sql);<br><br>

	// if ($pdo->lastInsertId()>0) {<br>
	// 	echo "Usuário inserido com sucesso - id => " . $pdo->lastInsertId();<br>
	// }else {<br>
	// 	echo "Erro ao Inserir usuário";<br>
	// }<br>
	}<br><br>
	
} catch (PDOException $e) {<br>
	echo "Falhou: ". $e->getMessage();<br>
}<br><br>

</code>
<?php 
$dsn  = "mysql:dbname=blog;host=localhost";
$user = "root";
$pass = "";

try {
	
	$pdo = new PDO($dsn, $user, $pass);// Conexão Aberta
	
	$nome = "Testando3";
	$email = "teste3@hotmail.com";
	$senha = md5("123");

	$sql = "SELECT email FROM usuarios WHERE email = '$email'";

	$resultado = $pdo->query($sql);

	if (!empty($resultado->fetchAll())) {
		echo "Não vazio = O email já existe";
	}else{
		echo "Vazio = Pode Inserir o registro";
		echo "Resultado = " . print_r($resultado->fetchAll());

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";

	$resultado=$pdo->query($sql);

	if ($pdo->lastInsertId()>0) {
		echo "Usuário inserido com sucesso - id => " . $pdo->lastInsertId();
	}else {
		echo "Erro ao Inserir usuário";
	}
	}
	
} catch (PDOException $e) {
	echo "Falhou: ". $e->getMessage();
}

 ?>