<?php 
class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtdComentarios;

    public function __construct($t,$c)
    {
        $this->setTitulo($t);
        $this->setCorpo($c);

    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($t){
        if (strlen($t) >= 5) {
            $this->titulo = $t;
        }else{
            echo "Titulo não compatível";
        }
    }

    public function getCorpo(){
        return $this->corpo;
    }

    public function setCorpo($c){
        $this->corpo=$c;
    }

    public function addComentarios($msg){
        $this->comentarios[]=$msg;
        $this->contarComentarios();
    }

    private function contarComentarios(){
        $this->qtdComentarios = count($this->comentarios);
    }

    public function getQtdComentarios(){
        return $this->qtdComentarios;
    }

}


?>