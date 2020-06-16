<?php
// Uma classe abstrata obriga toda classe que a extende a possuir funções
// que seriam obrigatórias... no exemplo abaixo as classes dariam erro fatal 
// se não implementassem a função andar()...
abstract class Animal {
    public $nome;
    private $idade;

    abstract protected function andar();
}

class Cavalo extends Animal{
    private $qtdPatas;
    private $tipoDePelo;

    public function andar(){

    }
}

class Gato extends Animal{
    public $mia;

    public function andar(){
        
    }
}

$animal = new Cavalo();
$animal->nome="Cavalo 1";

echo "O nome do animal é - ".$animal->nome;
echo "<br>";

$gato = new Gato();
$gato->nome="Toquinho";
$gato->mia = "miau";

echo "O gato ".$gato->nome." faz ".$gato->mia;

?>