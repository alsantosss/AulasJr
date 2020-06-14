<?php
    require_once "config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads - Multiplos</title>
</head>
<body>
    <h1>Uploads - Multiplos</h1>
    <hr><br>

    <form method="post" action="mult_tratamento.php" enctype="multipart/form-data">

    Arquivos:<br>
    <input type="file" name="arquivo[]" multiple><br><br>

    <input type="submit" value="Enviar Arquivos">


    </form>
    <br>
    <hr>
    <h3>*** Envio ***</h3>

    <p>Poucas coisas diferem o recebimento simples de arquivos do recebimento multiplo, são elas:</p>
    <code>
        - Em input a propriedade do nome do arquivo é transformada em array;<br>
        name="arquivo[]"<br><br>
        - Em seguida é adicionado a propriedade [ multiple ] ao fim do input;<br>
        < input type="file" name="arquivo[]" multiple /> <br><br>
    </code>

    <h3>*** Recebimento ***</h3>
    <p>
        Com relação ao recebimento é alterado a forma como o array vai para a página de tratamento... <br>
        Sendo enviado como um array tridimensional, onde [ n ] é a quantidade de arquivos que foram <br>
        enviados.... Ex.: <code>$_FILES['arquivo']['tmp_name'][n];</code>

    </p>
    <code>
         // Verificando a existencia de arquivo dentro do Array;<br>
        if (isset($_FILES['arquivo']['tmp_name'][0]) && !empty($_FILES['arquivo']['tmp_name'][0])) {<br>
            $arquivos = $_FILES['arquivo'];<br>
        }else{<br>
            echo "Não foram enviados arquivos!";<br>
        }<br><br>

        // Fazer um for para enviar os arquivos de acordo com sua qtdade de count(Files...);<br>
        for ($n=0; $n < count($_FILES['arquivo']['tmp_name']); $n++) { <br><br>

            // Altera nome arquivo para não haver substituiçao por aidente;<br>
            $nome_arquivo = time().rand(0,10).$_FILES['arquivo']['name'][$n];<br><br>

            move_uploaded_file($_FILES['arquivo']['tmp_name'][$n],"img/".$nome_arquivo);<br>
        }<br><br>
        echo "Arquivos movidos com sucesso";<br>

    </code>
<hr>


</body>
</html>