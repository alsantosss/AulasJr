<p>
Namespaces são como pastas imaginárias onde o programador pode implementar duas <br>
versões do mesmo código por exemplo e para não ter de reescrever o mesmo código <br>
pode aplicar a solução de namespaces... diferenciando apenas os caminhos...  <br> <br>

<code>
require_once "Sobre1.php"; <br>
require_once "Sobre2.php"; <br> <br> <br>



$versao = new aplicacao\v1\Sobre(); <br>
// $versao = new aplicacao\v2\Sobre(); <br> <br>
$versao->getVersao();


</code>
</p>


<?php
require_once "Sobre1.php";
require_once "Sobre2.php";



$versao = new aplicacao\v1\Sobre();
// $versao = new aplicacao\v2\Sobre();
$versao->getVersao();

?>