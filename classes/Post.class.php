<?php 
class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($t){
        $this->titulo = $t;
    }

}


?>