<?php
require_once 'crud.class.php';

$crud = new Crud();

//  *** SELECT ***
// $crud->query("SELECT * FROM posts");
//     // echo "O numero de dados em banco é de : ".$crud->getNumRows();
//     // echo "<br><pre>";
//     // print_r($crud->getResult());
//     if($crud->getNumRows()>0){
//         foreach ($crud->getResult() as $key => $value) {
//             echo "Título = ".$value['titulo'];
//             echo "<br>Corpo = ".$value['corpo'];
//             echo "<br>Autor = ".$value['autor'];
//             echo "<br>Data = ".$crud->getDataBr($value['data_criado']);
//             echo "<hr>";
//         }
//     }else{
//         echo "Não há dados";
//     }

//  **** TESTE FUNÇÃO DATA PARA BANCO E DATA DO BANCO PARA VIEW ****
// echo $crud->getDataToBanco("29/01/2020 00:00:00");  // retorna 2020-01-29 00:00:00
// echo $crud->getDataBr("2020-01-29 00:00:00"); // retorna 29/01/2020

// *** INSERT ***
// $name= $crud->randomName();
// $dados=array(
//     'matricula'=>rand(123231,567878),
//     'titulo'=>'Titulo',
//     'data_criado'=>date("Y-m-d"),
//     'corpo'=>'Texto de teste...',
//     'autor'=>$name,
//     'qtde'=>rand(1,10)
// );

// $crud->insert("posts",$dados);

 //*** UPDATE ***
// $name= $crud->randomName();
// $data=array(
//     'matricula'=>rand(123231,567878),
//     'titulo'=>'Novo post teste 2 alterado',
//     'data_criado'=>date("Y-m-d"),
//     'corpo'=>'Texto 2 de teste...',
//     'autor'=>$name,
//     'qtde'=>rand(1,10)
// );
// $where = array( 
//     'matricula'=>'211024',
//     'id' => '9'
// );

// $where_cond = 'and';

// $crud->update("posts",$data, $where, $where_cond);


 //*** DELETE ***
// $where = array( 
//     'matricula'=>'435678',
//     'id' => '4'
// );

// $where_cond = 'OR';
// $crud->delete("posts",$where, $where_cond);

?>