<?php
class Calculadora{
    private $n;

    public function __construct($ni){
        $this->n = $ni;
    }

    public function somar($sm){
        $this->n += $sm;
        return $this;
    }

    public function subtrair($sb){
        $this->n -= $sb;
        return $this;
    }

    public function multiplicar($mt){
        $this->n *= $mt;
        return $this;
    }

    public function dividir($dv){
        $this->n /= $dv;
        return $this;
    }

    public function getResult(){
        return $this->n;
    }
}

$calc = new Calculadora(10);
$calc->somar(5)->subtrair(2)->multiplicar(2)->dividir(2);

echo "Resultado da aplicação = " . $calc->getResult();


?>