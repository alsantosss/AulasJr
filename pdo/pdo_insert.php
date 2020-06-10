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
	
	


} catch (PDOException $e) {
	echo "Falhou: ". $e->getMessage();
}

 ?>