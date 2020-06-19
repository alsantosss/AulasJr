<?php
/*

Jamais faça um UPDATE SEM WHERE...

*/
$ins=array(
            array(
                'nome'=>'Andre',
                'email'=>'alsantosss@hotmail.com',
                'idade'=>'43',
                'senha'=>'123'
            ),array(
                'nome'=>'José',
                'email'=>'jose@hotmail.com',
                'idade'=>'50',
                'senha'=>'321'
            ),array(
                'nome'=>'Maria',
                'email'=>'maria@hotmail.com',
                'idade'=>'22',
                'senha'=>'456'
            )
        );
//print_r($ins[1]); exit;

for ($i=0; $i < count($ins); $i++) { 
    $id = 1;
    $valores='';
    $campo='';
    foreach ($ins[$i] as $key => $value) {
        $campo .=$key.'=';
        $campo .="'$value',";
    }
    $insertInto = substr($campo,0,-1);
    echo "<br>sql = UPDATE tb_name SET $insertInto WHERE id = $id";
}




?>