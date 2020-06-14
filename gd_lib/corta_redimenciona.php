<?php
// $arquivo = "img_orig/15919634280iMacPro5.png";
$arquivo = "img_orig/159196330010Cosmos03.jpg";

$largura = "200";

$altura = "200";

list($largura_original, $altura_original) = getimagesize($arquivo);

//ratio é a divisão largura/altura, onde se pega a proporção das imagens..
$ratio = $largura_original / $altura_original;

if ($largura/$altura > $ratio) {
    $largura = $altura * $ratio;
}else{
    $altura = $largura / $ratio;
}

// echo "L Original : " . $largura_original . " e  A Original : " . $altura_original;

// echo "<br> L Recalc : " . $largura . " e Alt. Recalc : " . $altura;

$imagem_final = imagecreatetruecolor($largura,$altura);

//$imagem_original = imagecreatefrompng($arquivo);
$imagem_original = imagecreatefromjpeg($arquivo);

imagecopyresampled($imagem_final,$imagem_original,0,0,0,0,$largura,$altura,$largura_original,$altura_original);

// PNG
//Imprime a imagem redimencionada no navegador
// header("Content-Type: image/png");
//imagepng($imagem_final,null);

// Faz o download da imagem redimencionada.
// imagepng($imagem_final,"img_red/mini_imagem.png");


// JPEG
// Imprime a imagem redimencionada no navegador
// header("Content-Type: image/jpeg");
// imagejpeg($imagem_final,null,100);

// Faz o download da imagem redimencionada.
// imagepng($imagem_final,"img_red/mini_imagem.jpg");

?>