<h1>Timestamp</h1>



<?php
// 7 days; 24 horas; 60 min; 60 seg;
$proxSemana = time() + (7 * 24 * 60 * 60);

echo 'Hoje...............:       '. date('d/m/Y') ."<br>";

echo 'Prox. Semana: '. date('d/m/Y', $proxSemana) ."<br>";

// ou usando strtotime():
echo 'Prox. Semana: '. date('d/m/Y', strtotime('+1 week')) ."<br>";
?>