<?php

class Usuarios{

    private $id;
    private $email;
    private $senha;
    private $nome;
    private $pdo;

    public function __construct($id)
    {
       try {
            $this->pdo = new PDO("mysql:dbname=blog;host=localhost","root","");
       } catch (PDOException $e) {
           echo "Erro ao conectar : ".$e->getMessage();
       }
       if(!empty($id)){
            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($id));

            if($sql->rowCount()>0){
                $data = $sql->fetch();
                $this->id = $data['id'];
                $this->email = $data['email'];
                $this->senha = $data['senha'];
                $this->nome = $data['nome'];                
            }

       }
    }

    public function getId()
    {
       return $this->id;
    }

    public function setEmail($e)
    {
       $this->email=$e;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setSenha($s)
    {
        $this->senha=md5($s);
    }

    public function setNome($n)
    {
        $this->nome=$n;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function salvar()
    {
        if(!empty($this->id))
        {
            $sql = "UPDATE usuarios SET email = ?, senha = ?, nome = ? WHERE id = ?";
            $sql=$this->pdo->prepare($sql);
            $sql->execute(array($this->email,$this->senha,$this->nome,$this->id));
        }else{
            $sql = "INSERT INTO usuarios SET email = ?, senha = ?, nome = ?";
            $sql= $this->pdo->prepare($sql);
            $sql->execute(array($this->email,$this->senha,$this->nome));
        }
    }


}

?>