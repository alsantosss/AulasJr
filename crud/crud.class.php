<?php
class Crud{

private $pdo;
private $numRows;
private $array;

    public function __construct(){
        $dsn = "mysql:dbname=blog;host=localhost";
        $user= "root";
        $pass= "";

        try {
            $this->pdo = new PDO($dsn,$user,$pass);
        } catch (PDOException $e) {
            echo "Falha de banco : " . $e->getMessage();
        }
    }

    public function query($sql){
        // A variável $query se torna um objeto resultante da chamada de 
        // método da classe PDO [ $this->pdo->query($sql); ]...
        // podendo então chamar o método rowCount() tb um método da classe PDO.
        $query = $this->pdo->query($sql);
        $this->numRows = $query->rowCount();
    }

    public function getNumRows(){
        return $this->numRows;
    }

    

}
