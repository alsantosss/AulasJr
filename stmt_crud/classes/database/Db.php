<?php
class Db{
    private $db;
    private $dsn  = "mysql:dbname=blog;host=localhost";
    private $user = "root";
    private $pass = "";

    public function __construct()
    {
        try {
            $this->db = new PDO($this->dsn,$this->user,$this->pass);
        } catch (PDOException $e) {
            echo "Erro de Conexão : ". $e->getMessage();
        }
    }
        
}

?>