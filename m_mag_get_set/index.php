<?php
require_once 'pessoa.class.php';

$pessoa = new Pessoa();

$pessoa->nome = 'André Santos';
$pessoa->email = 'alsantosss@hotmail.com';

var_dump($pessoa->nome);
echo '<br> Email = '. $pessoa->email;

?>