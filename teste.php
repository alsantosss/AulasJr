
<?php
$var = array(
    'nome'=>'joao',
    'idade'=>'',
    'sexo'=>'m'
);

$valida = (in_array(null, $var));

if($valida == 1){
    echo "Array tem itens nulos .. valida = ".$valida;
}else{
    echo "Array válido.. valida = ".$valida;
}

?>