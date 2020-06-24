<?php

class Usuarios{

    private $id;
    private $email;
    private $senha;
    private $nome;
    private $pdo;

    public function __construct($id = null)
    {
       try {
            $this->pdo = new PDO("mysql:dbname=blog;host=localhost","root","");
       } catch (PDOException $e) {
           echo "Erro ao conectar : ".$e->getMessage();
       }
       if(!empty($id)){
            if(!is_int($id)){
                echo "Erro de Parametro. ";
                exit;
            }
            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($id));

            if($sql->rowCount()>0){
                $data = $sql->fetch();
                
                $this->id = $data['id'];
                $this->id = $data['id'];
                $this->email = addslashes($data['email']);
                $this->senha = addslashes($data['senha']);
                $this->nome = addslashes($data['nome']);                
            }else{
                echo "Não há informações desse Registro!";
            }

       }
    }

    public function getId()
    {
       return $this->id;
    }

    public function setEmail($e)
    {
        $this->email = $this->validaSet($e);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setSenha($s)
    {
        $pas = $this->validaSet($s);
        $this->senha=md5($pas);
    }

    public function setNome($n)
    {
        $this->nome=$this->validaSet($n);
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
            if ($sql->rowCount()>0) {
                echo "Update executado com sucesso!";
            }else{
                echo "Não houve Alteração no Usuário !";
            }
        }else{
            $sql = "INSERT INTO usuarios SET email = ?, senha = ?, nome = ?";
            $sql= $this->pdo->prepare($sql);
            $sql->execute(array($this->email,$this->senha,$this->nome));
            if ($sql->rowCount()>0) {
                echo "Usuário inserido com sucesso!";
            }else{
                echo "Não houve Usuário Inserido!";
            }
        }
    }

    public function delete()
    {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->pdo->prepare($sql);
        $sql->execute(array($this->id));

        if ($sql->rowCount()>0) {
            echo "Delete executado com sucesso!";
        }else{
            echo "Não houve Usuário deletado!";
        }
    }

    public function validaSet($v)
    {
        if(isset($v) && ($v != '')){
            return addslashes($v);
        }else{
            echo "Foi inserido dado não válido.";
            exit;
        }
            
    }


}

?>