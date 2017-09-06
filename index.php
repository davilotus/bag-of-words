<?php
$_GET['d'] = NULL;
$terms_1th = ['Rei','Arroz','Pato','Palhaço','Gato'];
$terms_3nd = ['Gato','Palhaço','Botas'];

$terms_2nd = ['Rei','Arroz','Pato','Palhaço','Gato','Azul', 'Preto'];




function check_bag($a,$b){
    $a_size = array_count_values($a);
    $b_size = array_count_values($b);
    $arr = array_merge($a,$b);
    $i = 0;
    $a1 = NULL;

    if ($a_size > $b_size){
        
        $count = $a_size;
        $score = 0;

        foreach ($a as $terms) {
          if(isset($count[$terms])){
            $a1[$terms] = $terms;
          }
          $i++;
        }
        
        foreach ($b as $terms) {
          if(!isset($a1[$terms])){
            $a1[$terms] = $terms;
          }
          $i++;
        }
        return $a1;
    }
    else{
   
        $count = $b_size;
        $score = 0;

        foreach ($b as $terms) {
          if(isset($count[$terms])){
            $a1[$terms] = $terms;
          }
          $i++;
        }
        
        foreach ($a as $terms) {
          if(!isset($a1[$terms])){
            $a1[$terms] = $terms;
          }
          $i++;
        }
        return $a1;
    }
}



$result = check_bag($terms_1th,$terms_3nd);
var_dump($result).die();