<?php
require_once "config.php";

if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) ) {
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes(md5($_POST['senha']));

    $sql = "SELECT email FROM usuarios WHERE email = '$email'";

    $sql = $pdo->query($sql);

    if(!empty($sql->fetchAll())){
        echo "Esse email já está cadatrado!";        
    }else{

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
       
        $pdo->query($sql);

        if($pdo->lastInsertId()){
            header("Location:index.php");
        }else{
            echo "Erro ao inserir usuário". $pdo->errorInfo();
        }

    }
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
                 
            <div class="row blo">
                <div class="col-md-12 text-center">
                <hr><h1 class="fa fa-edit">Cadastrar Novo Usuário</h1><hr>
                    <form method="post">

                    <table class="table table-light ">
                        <tr>
                            <td>
                               <div class="text-right">Nome:</div> 
                            </td>
                            <td>
                            <div class="text-left"><input type="text" name="nome" id="nome" value="" autofocus></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="text-right"> Email:</div>
                            </td>
                            <td>
                            <div class="text-left"> <input type="email" name="email" id="email" value=""></div>
                            </td>                            
                        </tr>
                        <tr>
                            <td>
                            <div class="text-right"> Senha:</div>
                            </td>
                            <td>
                            <div class="text-left"> <input type="password" name="senha" id="senha" value=""></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="text-right"> Contra-Senha:</div>
                            </td>
                            <td>
                            <div class="text-left"> <input type="password" name="contra_senha" id="contra_senha" value=""></div>
                            </td>
                        </tr>
                        <tr></tr><tr></tr>
                        <tr>
                            <td></td>
                            <td>
                            <div class="text-left"><input type="submit" class="btn btn-primary " name="submit" value="Cadastrar" onclick="return validarSenha()"></div>
                            </td>
                        </tr>
                    </table>
                     
                    </form>
                </div>
            </div>
        
        </div>
        <script>
            function validarSenha() {
            var senha1 = document.getElementById("senha");
            var senha2 = document.getElementById("contra_senha");
            var s1 = senha1.value;
            var s2 = senha2.value;
            if (s1 == s2) {                
                return true;
            } else {
                alert("Senhas não batem. Verifique o valor digitado.");
                return false;
            }
            }
        </script>
    </body>
</html>