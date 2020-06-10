<h1>
	Biblioteca PDO
</h1>

<p>

</p>

<code>
$dsn  = "mysql:dbname=blog;host=localhost";<br>
$user = "root";<br>
$pass = "";<br><br>

try {<br><br>
	
	$pdo = new PDO($dsn, $user, $pass);<br>
	echo "Sucesso";<br><br>

} catch (PDOException $e) {<br><br>
	echo "Falhou: ". $e->getMessage();<br><br>
}<br><br>

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
		echo "Retornou resultado";
	}else{
		echo "Não há usuários cadastrados";
	}


} catch (PDOException $e) {
	echo "Falhou: ". $e->getMessage();
}

 ?>