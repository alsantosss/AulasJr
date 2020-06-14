<?php
session_start();
echo "<a href='logoff.php'> LogOff</a><br><br>";

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
   echo "Área Restrita...<br>";
   echo "Dados passados: ";
   echo $_SESSION['email'] .' - '. $_SESSION['nome'] .' - '. $_SESSION['id'];
}else{
    header("Location: login.php");
}
?>