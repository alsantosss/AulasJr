<?php
require_once "../stmt_crud/classes/database/Db.php";
$pdo = new Db();
$qtd_pg_user = 10;

/*   Bloco para Contagem dos Registros da Tabela  */
$sql = "SELECT COUNT(*) as c FROM posts";
$sql = $pdo->db()->query($sql);
$sql = $sql->fetch();
$total_registros = $sql['c'];
/*   Fim do Bloco  */

/* 
 * A divisão do total de registros pela qtd de páginas que o usuário
 * quer é a quantidade de links que será gerado pelo for para buscar 
 * o número das páginas.
 */
$qtd_pgs = $total_registros/$qtd_pg_user;

/* Esse bloco define o valor do primeiro parametro do LIMIT com base
 * no valor da pagina enviada multiplicado pela quantidade de registros
 * desejado pelo usuário
 */
$pg = 1;
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $pg = $_GET['p'];
}
$limit1 = ($pg-1) * $qtd_pg_user;


$sql = "SELECT * FROM posts LIMIT $limit1,$qtd_pg_user"; 
$sql = $pdo->db()->query($sql);

if ($sql->rowCount()>0) {
    foreach ($sql->fetchAll() as $item) {
        echo $item['id'] . " - " . $item['titulo']. "<br>";
    }
}

echo "<hr>";

for ($i=0; $i < $qtd_pgs; $i++) { 
    echo "<a href='?p=".($i+1)."'> [ ".($i+1)." ] </a>";
}

?>
