<?php
require_once "config.php";

$post = new Post("Novo Título da Postagem", "Matéria do corpo da postagem!");

// $post->setTitulo("Titulo da Postagem - 2");

echo "Meu título é : " . $post->getTitulo();
echo "<br>";
echo "Corpo da Mensagem : " . $post->getCorpo();

$post->addComentarios("comentario 1");
$post->addComentarios("comentario 2");
$post->addComentarios("comentario 3");
$post->addComentarios("comentario 4");

echo "<br>";

echo "A quantidade de comentarios é de -> ".$post->getQtdComentarios();
?>