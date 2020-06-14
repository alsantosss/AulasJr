<?php
// Testando e recebendo o Post
//  - Verifico se foi enviado algo pelo form
if (isset($_POST['email'])) {
  // E se o que foi enviado é válido.
  if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);
  }else{
    echo "Não há dados suficientes para envio do email, revise seu formulário.";
  }


// utilizando os dados do servidor de email da plataforma para o envio do mesmo
$para      = "email.pessoal.admin@gmail.com";
$assunto   = "Pergunta do Contato pelo Site";
$corpo     = "Nome : ".$nome." - Email : ".$email." - Mensagem : ".$msg;
$cabecalho = "From: suporte.plataforma.email@meusite.com\r\n";
$cabecalho.= "Replay-To: ".$email."\r\n";
$cabecalho.= "X-Mailer: PHP/". phpversion();

/* Testando se tudo está certo...
$teste = array($para,$assunto,$corpo,$cabecalho);
echo "<pre>";
print_r($teste);
echo "</pre>";

*/

// efetuar o envio propriamente dito com a função mail()
mail($para,$assunto,$corpo,$cabecalho);
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/fontawesome.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col">
    <h1>Formulário de contato</h1>

    <form action="" method="post">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label for="msg">Mensagem:</label>
            <textarea id="msg" class="form-control" name="msg" rows="6"></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    </div>
</div>
</body>
</html>