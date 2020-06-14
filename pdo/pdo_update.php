<h1>
	Biblioteca PDO (Update)
</h1>

<code>
$dsn  = "mysql:dbname=blog;host=localhost";<br>
$user = "root";<br>
$pass = "";<br><br>

try {<br><br>
	
    $pdo = new PDO($dsn, $user, $pass);// Conexão Aberta<br><br>

    $email_old="email_update@hotamil.com";<br><br>

    $email_up="email_update2@hotamil.com";<br><br>
	
    $sql = "UPDATE usuarios SET email = '$email_up' WHERE email = '$email_old'";<br><br>
    
    if($pdo->query($sql)){<br>
        echo "Update efetuado com sucesso";<br>
    }else{<br>
        echo "Não foi possível efetuar o update.";<br>
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

    $email_old="email_update@hotamil.com";

    $email_up="email_update2@hotamil.com";
	
    $sql = "UPDATE usuarios SET email = '$email_up' WHERE email = '$email_old'";
    
    if($pdo->query($sql)){
        echo "Update efetuado com sucesso";
    }else{
        echo "Não foi possível efetuar o update.";
    }

} catch (PDOException $e) {
	echo "Falhou: ". $e->getMessage();
}

 ?>