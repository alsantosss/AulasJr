<?php
session_start();
require_once "config.php";
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha = '$senha'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount()>0) {
        $user = $sql->fetch();
        $_SESSION = array(
            'id'    => $user['id'],
            'nome'  => $user['nome'],
            'email' => $user['email']
        );
        header("Location:index.php");
    }else{
        echo "Usuário não Cadastrado";
    }

}
?>
<h1>Login</h1>
<form action="" method="post">
    Email:<br>
    <input type="email" name="email" id="email" autofocus><br><br>
    Senha:<br>
    <input type="password" name="senha" id="senha"><br><br>
    <input type="submit" value="Entrar">
</form>