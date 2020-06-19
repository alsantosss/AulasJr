<?php
class Pessoa{
    private $nome;
    private $email;

    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

}
?>