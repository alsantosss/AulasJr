<h1>
	Biblioteca PDO (Delete)
</h1>

<code>
$dsn  = "mysql:dbname=blog;host=localhost";<br>
$user = "root";<br>
$pass = "";<br><br>

try {<br><br>
	
    $pdo = new PDO($dsn, $user, $pass);// Conexão Aberta<br><br>

    $id = 6;<br><br>
	
    $sql = "DELETE FROM usuarios WHERE id = '$id'";<br><br>

    $res = $pdo->query($sql);<br><br>
    
    if($res->rowCount()>0){<br>
        echo "Usuário deletado com sucesso";<br>
    }else{<br>
        echo "Não foi possível efetuar o delete.";<br>
    }<br><br>

} catch (PDOException $e) {<br>
	echo "Falhou: ". $e->getMessage();<br>
}<br><br>

<?php 
$dsn  = "mysql:dbname=blog;host=localhost";
$user = "root";
$pass = "";

try {
	
    $pdo = new PDO($dsn, $user, $pass);// Conexão Aberta

    $id = 6;
	
    $sql = "DELETE FROM usuarios WHERE id = '$id'";

    $res = $pdo->query($sql);
    
    if($res->rowCount()>0){
        echo "Usuário deletado com sucesso";
    }else{
        echo "Não foi possível efetuar o delete.";
    }

} catch (PDOException $e) {
	echo "Falhou: ". $e->getMessage();
}

 ?>