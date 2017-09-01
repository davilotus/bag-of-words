<?php
$terms_1th = ['Rei','Arroz','Pato','Palhaço','Gato'];
$terms_2nd = ['Gato','Palhaço','Botas'];

function check_bag($a,$b){
    $a_size = array_count_values($a);
    $b_size = array_count_values($b);

    if ($a_size > $b_size){
        $count = $a_size;
        $score = 0;
        foreach ($b as $terms) {
           $score += (isset($count[$terms])) ? 1 : 0 ;
        }
        var_dump($score);
    }else{
        $count = $b_size;
        $score = 0;
        foreach ($a as $terms) {
           $score += (isset($count[$terms])) ? 1 : 0 ;
        }
        var_dump($score);
    }
}

check_bag($terms_1th,$terms_2nd);