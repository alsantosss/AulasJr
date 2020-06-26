
<?php
/**
 * @author André Santos <alsantosss@gmail.com>
 * @return $data 
 * @package Classe parte do projeto
 * @param mixed $name
 * 
 * 
 */
    $classe = 'classTeste';
    $pastas=['database/',''];
    foreach ($pastas as $pasta) {
       echo $arquivo = "{$pasta}$classe.php <br>";

    }

?>