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
        // O Obj $query executa o método da classe PDO fetchAll(), trazendo os resultados
        // da consulta que são colocados na variável privada $array;
        $this->array = $query->fetchAll();
    }

    public function getResult(){
        return $this->array;
    }

    public function getNumRows(){
        return $this->numRows;
    }

    public function insert($tabela, $dados){
        $existe_nulos = $this->exist_nulos($dados);
        if (!empty($tabela) && (is_array($dados) && count($dados)>0) && !$existe_nulos) {
            $sql = "INSERT INTO $tabela SET ";
            $data = array();
            foreach ($dados as $key => $value) {
                $data[]="$key = '".addslashes($value)."'";
            }
            $sql = $sql . implode(', ', $data);

            // echo $sql;exit;

            $result = $this->pdo->query($sql);
            if($result->rowCount()>0){
                echo 'Inserido com sucesso!';
            }else{
                echo 'Não inserido!'. $result->errorCode();
            }
        }else{
            echo "Dados passados não são válidos";
        }
    }

    public function update($tabela, $data, $where = array(), $where_cond = null)
    {   
        $existe_nulos = $this->exist_nulos($data); 
        if (!empty($tabela) && (is_array($data) && ($data > 0) && (!$existe_nulos)) && is_array($where)) {
            $sql = "UPDATE $tabela SET ";
            $dados = array();
            
            foreach ($data as $key => $value) {
                $dados[]="$key = '".addslashes($value)."'";
            }
            $sql = $sql . implode(', ', $dados);
            
            if ($where > 0) {
                $dados = array();
                foreach ($where as $key => $value) {
                    $dados[]="$key = '".addslashes($value)."'";
                }
                $sql = $sql . " WHERE " .implode(' '.$where_cond.' ', $dados);                
            }
            
            $query = $this->pdo->query($sql);
            
            if($query->rowCount()>0){
                echo "Update efetuado com sucesso";
           }else{
               echo("Não foi possível efetuar o update. ");
               print_r($query->errorInfo());
           }
        }else{
            echo "Dados inválidos enviados!";
        }
    }

    public function delete($tabela, $where, $where_cond)
    {
        if (!empty($tabela) && (is_array($where) && count($where)>0)) {
            
            $sql = "DELETE FROM $tabela ";

            if ($where > 0) {
                $dados = array();
                foreach ($where as $key => $value) {
                    $dados[]="$key = '".addslashes($value)."'";
                }
                $sql = $sql . " WHERE " .implode(' '.$where_cond.' ', $dados);                
            }

            $ret = $this->pdo->query($sql);

            if ($ret->rowCount()>0) {
                echo "Dados deletados com sucesso!";
            }else{
                echo "Erro ao deletar dados ".$this->pdo->errorCode();
            }
        }else{
            echo "Erro nos dados enviados... ".$this->pdo->errorCode();
        }
    }

    public function getDataBr($data_banco){
        $dtBr=date("d/m/Y", strtotime($data_banco));
        return $dtBr;
    }

    public function getDataToBanco($dtTBc){
        $nwDt = substr($dtTBc, 0, -9);
        $dtBc=implode('-', array_reverse(explode('/', $nwDt)));        
        return $dtBc." 00:00:00";
    }

    public function exist_nulos($arr)
    {
        //retorna true se array tem índices nulos ou vazios
        $valida = (in_array(null, $arr));
        return $valida;
    }

    public function randomName() {
        $names = array(
            'Juan','Luis','Pedro','Johnathon','Anthony','Erasmo','Raleigh','Nancie','Tama',
            'Camellia','Augustine','Christeen','Luz','Diego','Lyndia','Thomas','Georgianna',
            'Leigha','Alejandro','Marquis','Joan','Stephania','Elroy','Zonia','Buffy',
        );
        return $names[rand ( 0 , count($names) -1)];
    }    
    // uso == print randomName();

}
