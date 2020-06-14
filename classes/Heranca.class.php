<?php

class Animal {
    public $nome;
    private $idade;
}

class Cavalo extends Animal{
    private $qtdPatas;
    private $tipoDePelo;
}

class Gato extends Animal{
    public $mia;
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