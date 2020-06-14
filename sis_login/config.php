<?php
$dsn  = "mysql:dbname=blog;host=localhost";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>