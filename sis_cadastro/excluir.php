<?php
require_once "config.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id =$_GET['id'] ;
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if($sql->rowCount()>0){
        header("Location:index.php");
    }else{
        echo "Erro .. Usuário não existe no banco";
    }    
} else {
    header("Location:index.php");
}


?>