<?php
require_once "config.php";

if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
    if($pdo->query($sql)){
        header("Location:index.php");
    }
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if($sql->rowCount()>0){
        $usuario = $sql->fetch();
    }else{
        echo "Usuário não existe no sistema";
    }

}else{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../assets/css/bootstrap-min.css">
    <script src="https://kit.fontawesome.com/5320080d26.js" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="container">
                 
            <div class="row">
                <div class="col-md-12 text-center">
                <hr><h1 class="fa fa-edit">Editar</h1><hr>
                    <form method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $usuario['id']; ?>"> 
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" value="<?= $usuario['nome']; ?>"><br><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="<?= $usuario['email']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary " name="submit" value="Editar">
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
    </body>
</html>