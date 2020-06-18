<p>
    Polimorfismo, substitui uma função herdada de mesmo nome com conteúdo diferente.
</p>
<?php
class Animal{
    public function getNome(){
        echo "getNome da classe Animal";
    }

    public function testar(){
        echo "Testado";
    }
}

class Cachorro extends Animal{

    //Ao se retirar a função polimórfica abaixo, quem assume é a função getNome da classe Animal
    // public function getNome(){
    //     echo "getNome da classe Cachorro";
    // }

    // E mesmo reescrevendo uma função herdada, vc ainda pode utilizar os métodos da classe
    // original nela.
    public function getNome(){
        $this->testar();
    }
}

// $animal = new Animal();
// $animal->getNome();

$cachorro = new Cachorro();
$cachorro->getNome();
?>