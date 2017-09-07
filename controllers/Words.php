<?php
namespace controllers{

class Words{
    function __construct(){
        
    }

    #return union of arrays no repeat
    static function get_bag($a,$b){
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

    public function bag_to_string($arr){
        $result = NULL;
        $i = 1;
        foreach ($arr as $value) {
            $count = sizeOf($arr);
            if($count == $i){
                $result .= $value;
            }else{
                $result .= $value.', ';
            }
            $i++;
            
        }
        return $result;
    }
}



}