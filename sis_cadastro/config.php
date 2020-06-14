<?php
    $dsn  = "mysql:dbname=blog;host=localhost";
    $user = "root";
    $pass = "";
    $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $pdo = new PDO($dsn,$user,$pass, $opcoes);
    } catch (PDOException $e) {
       echo "Erro de Conexão => ". $e->getMessage();
    }

?>