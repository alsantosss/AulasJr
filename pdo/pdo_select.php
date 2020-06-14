<h1>
	Biblioteca PDO (Select)
</h1>

<p>

</p>

<code>
$dsn  = "mysql:dbname=blog;host=localhost";<br>
$user = "root";<br>
$pass = "";<br><br>

try {<br><br>
	
	$pdo = new PDO($dsn, $user, $pass);// Conexão Aberta<br><br>
	
	$sql = "SELECT * FROM usuarios"; // O select é feito e colocado em uma variável<br><br>

	$result = $pdo->query($sql); // A variável $result é tranformada em uma instância da classe pdo para execução da query (A variável $sql poderia ser reutilizada, economizando memória... sem problemas ... ela seria reescrita apenas.)<br><br>

	if($result->rowCount()>0){<br>
		foreach($result->fetchAll() as $usuario){<br>
			echo "Nome: " . $usuario['nome'] . " E-mail: " . $usuario['email'] . "<br>";
		}<br>
	}else{<br>
		echo "Não há usuários cadastrados";<br>
	}<br><br>


} catch (PDOException $e) {<br>
	echo "Falhou: ". $e->getMessage();<br>
}
<br><br>

</code>
<?php 
$dsn  = "mysql:dbname=blog;host=localhost";
$user = "root";
$pass = "";

try {
	
	$pdo = new PDO($dsn, $user, $pass);// Conexão Aberta
	
	$sql = "SELECT * FROM usuarios"; // O select é feito e colocado em uma variável

	$result = $pdo->query($sql); // A variável $result é tranformada em uma instância da classe pdo para execução da query (A variável $sql poderia ser reutilizada, economizando memória... sem problemas ... ela seria reescrita apenas.)

	if($result->rowCount()>0){
		foreach($result->fetchAll() as $usuario){
			echo "Nome: " . $usuario['nome'] . " E-mail: " . $usuario['email'] . "<br>";
		}
	}else{
		echo "Não há usuários cadastrados";
	}


} catch (PDOException $e) {
	echo "Falhou: ". $e->getMessage();
}

 ?>