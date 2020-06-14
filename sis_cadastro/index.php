<?php
require_once"config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="../assets/css/bootstrap-min.css">
    <script src="https://kit.fontawesome.com/5320080d26.js" crossorigin="anonymous"></script>
    
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1> <i class="fa fa-list"></i> Lista de Usuários</h1>
                <div style="text-align: right;">
                <a class="btn-sm btn-primary" href="novo.php" role="button">Incluir Novo</a>
                </div>
                    <table class="table table-striped table-inverse ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Nome</th><th>Email</th><th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
                                $sql = $pdo->query($sql);
                                if($sql->rowCount()>0){
                                    foreach ($sql->fetchAll() as $value) { 
                                    ?>
                                    <tr>
                                        <td class="text-left"> <?= $value['nome']; ?> </td> <td class="text-left"> <?= $value['email']; ?> </td> 
                                        <td> 
                                            <a style="text-decoration: none;" href="editar.php?id=<?= $value['id']; ?>">
                                                <span style="font-size: 1.1em; color: Dodgerblue;">
                                                    <i class="fa fa-edit"> </i> Editar
                                                </span> 
                                            </a>
                                            <a style="text-decoration: none;" href="excluir.php?id=<?= $value['id']; ?>" onclick="return deletar()">
                                                <span style="font-size: 1.1em; color: Tomato;">
                                                    <i class="far fa-trash-alt"></i> Excluir 
                                                </span> 
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <?php
                                        
                                    }
                                }
                            ?>

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
<script>
function deletar() {
  var r = confirm("Confirma a exclusão?");
  if(r == false){
    return false;
  }
}
</script> 
</body>
</html>