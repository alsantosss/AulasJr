<?php

function carregaClasse($nomeDaClasse) {
    $pastas = ['database', ''];
  
    foreach ($pastas as $pasta) {
      $arquivo = "/opt/lampp/htdocs/aulasjr/stmt_crud/classes/{$pasta}/{$nomeDaClasse}.php";
      if(file_exists($arquivo)){
        require_once($arquivo);
      }
    }
  }
  
  spl_autoload_register("carregaClasse");

?>