<?php
session_start();

$_SESSION = array(
    'id'    => '',
    'nome'  => '',
    'email' => ''
);
session_destroy();
header("Location:index.php");
?>