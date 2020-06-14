<?php
require_once "config.php";

// Verificando a existencia de arquivo dentro do Array;
if (isset($_FILES['arquivo']['tmp_name'][0]) && !empty($_FILES['arquivo']['tmp_name'][0])) {
    $arquivos = $_FILES['arquivo'];
}else{
    echo "Não foram enviados arquivos!";
}

// Fazer um for para enviar os arquivos de acordo com sua qtdade de count(Files...);
for ($n=0; $n < count($_FILES['arquivo']['tmp_name']); $n++) { 

    // Altera nome arquivo para não haver substituiçao por aidente;
    $nome_arquivo = time().rand(0,10).$_FILES['arquivo']['name'][$n];

    move_uploaded_file($_FILES['arquivo']['tmp_name'][$n],"../gd_lib/img_orig/".$nome_arquivo);
}
echo "Arquivos movidos com sucesso";

// echo '<pre>';
// @print_r($arquivos);
// echo '</pre>';

?>