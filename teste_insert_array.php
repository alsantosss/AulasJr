<?php

$ins=array(
    'nome'=>'Andre',
    'email'=>'alsantosss@hotmail.com',
    'idade'=>'43',
    'senha'=>'123',
);
    $valores='';
    $campo='';
    foreach ($ins as $key => $value) {
        $campo .=$key.',';
        $valores .="'$value',";
    }

$campos = substr($campo,0,-1);// Resultado = nome,email,idade,senha
$valor = substr($valores,0,-1);      // Resultado = Andre,alsantosss@hotmail.com,43,123

echo "sql = INSERT INTO tb_name (".$campos.") values (".$valor.")";
// }

?>