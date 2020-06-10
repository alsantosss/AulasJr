<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 ?>
<h1>Evitando SQL injection</h1>
<form action="" method="post" >
	<input type="text" name="pesquisa" placeholder="Matrícula ou Autor">
	<input type="submit" name="submit" value="Go">
</form>
<hr>
<p>Basicamente a função <code>addslashes()</code> evita a maior parte das tentativas de ataques,<br>
   adicionando uma contrabarra antes de qualquer apóstrofo [ \' ]  vindo de uma string de suas caixas<br>
   de pesquisa ou inputs.</p>
<?php 
@$autor = addslashes($_POST['pesquisa']);
echo "<b>O conteúdo da variável neste momento --> </b>" . @$autor;
?>
<code>
	<h3>Evitando Inserção de Códigos Maliciosos</h3>
	$autor = addslashes($_POST['pesquisa']);<br><br>
	$sql="SELECT * FROM posts WHERE autor LIKE '%<?= $autor ?>%' OR matricula LIKE '%<?= $autor ?>%'";<br><br>
	$result = $conn->query($sql);<br><br>
	foreach ($result as $value) {<br>
	print_r($value);<br>
	} <br><br>
	$conn->close();

<br>
</code>
<br><br>
<?php
	
	if (isset($_POST['pesquisa']) && !empty($_POST['pesquisa'])) {
		$autor = addslashes($_POST['pesquisa']);
		$sql="SELECT * FROM posts WHERE autor LIKE '%$autor%' OR matricula LIKE '%$autor%'";
		$result = $conn->query($sql);
?>
		<table border="1">
			<tr>
				<th>Título</th><th>Matrícula</th><th>Data</th><th>Corpo</th><th>Autor</th>
			</tr>
			<tbody>
<?php
		foreach ($result as $value) {?>
			<tr>
			<td><?= $value['titulo'] ?></td><td><?= $value['matricula'] ?></td><td><?= $value['data_criado'] ?></td><td><?= $value['corpo'] ?></td><td><?= $value['autor'] ?></td>
		</tr>
<?php   } ?>
			</tbody>
		</table>

<?php	} else {
		echo "Não há resultados";
	}

$conn->close();
 ?>
<br>