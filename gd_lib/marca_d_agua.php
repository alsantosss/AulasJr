<?php
//imagem onde será colocada a marca d'agua.
$arquivo="15919634280iMacPro5.png";

//pegar a largura e altura originais do arquivo acima e da mini_imagem.
list($largura_original,$altura_original) = getimagesize("img_orig/$arquivo");
list($largura_mini, $altura_mini) = getimagesize("img_red/mini_imagem.png");

//prepara um quadro em branco com o tamanho exato da imagem acima...
$imagem_final = imagecreatetruecolor($largura_original,$altura_original);

//pega a imagem a ser gravada e a marca d'agua respectivamente..
$imagem_original = imagecreatefrompng("img_orig/$arquivo");
$mini_imagem_marca_d_agua= imagecreatefrompng("img_red/mini_imagem.png");

//copia a imagem original onde será impresso a marca d'agua no quadro em branco,
//construido para receber essa imagem, as coordenadas 0,0,0,0 significam o ponto
//0 (canto superior esquerdo da imagem), medido em pixels.... seguido da largura e 
//altura originais da imagem.
imagecopy($imagem_final,$imagem_original,0,0,0,0,$largura_original,$altura_original);

// em seguida, copia a marca d'agua sobre a imagem acima...
imagecopy($imagem_final,$mini_imagem_marca_d_agua,0,0,0,0,$largura_mini,$altura_mini);

/* O código abaixo imprime o resultado no navegador.
header("Content-Type: image/png");
imagepng($imagem_final,null);
*/

imagepng($imagem_final,"img_marca_d_agua/img_marca_d_agua_$arquivo");

echo "Imagem salva com sucesso";

?>