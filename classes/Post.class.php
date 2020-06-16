<?php 
class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtdComentarios;

    //Construtores na maioria são públicos.. são os primeiros a serem executados
    //instantaneamente, podendo inicializar já com dados instanciados.
    public function __construct($t,$c)
    {
        $this->setTitulo($t);
        $this->setCorpo($c);

    }

    public function getTitulo(){
        return $this->titulo;
    }

    //getter and setter servem para poder validar os dados que chegam
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