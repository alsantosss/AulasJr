<?php
require_once 'crud.class.php';

$crud = new Crud();

$crud->query("SELECT * FROM posts");

echo "O numero de dados em banco é de : ".$crud->getNumRows();
echo "<br><pre>";
print_r($crud->getResult());

?>