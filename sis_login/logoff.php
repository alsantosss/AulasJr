<?php
session_start();

$_SESSION = array(
    'id'    => '',
    'nome'  => '',
    'email' => ''
);
header("Location:index.php");
?>