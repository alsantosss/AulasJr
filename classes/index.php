<?php
require_once "config.php";

$post = new Post();

$post->setTitulo("Titulo da Postagem");

echo "Meu título é : " . $post->getTitulo();




?>