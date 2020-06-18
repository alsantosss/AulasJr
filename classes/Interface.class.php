<p>
Uma interface é um template ou uma estrutura para uma classe... onde se define os metodos
funções ou ações que as classes posteriormente deverão implementar. Serve para organizar
o trabalho de uma equipe, por exemplo...
</p>

<?php
interface Animal{
    // os métodos são publicos e podem ter variáveis ex. public function andar($x, $y);
    public function andar();
}

class Cachorro implements Animal{
    public function andar(){
        echo "Estou andando...";
    }
}

 $cachorro = new Cachorro();
 $cachorro->andar();
 
?>