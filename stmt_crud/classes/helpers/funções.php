<?php
class funcoes{
    
    public function randomName() {
        $names = array(
            'Juan','Luis','Pedro','Johnathon','Anthony','Erasmo','Raleigh','Nancie','Tama',
            'Camellia','Augustine','Christeen','Luz','Diego','Lyndia','Thomas','Georgianna',
            'Leigha','Alejandro','Marquis','Joan','Stephania','Elroy','Zonia','Buffy',
        );
        return $names[rand ( 0 , count($names) -1)];
    }    
    // uso == print randomName();



}



?>