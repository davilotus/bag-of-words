<?php
namespace controllers{

class Mlearning{
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
    
    #return string of the array
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

    public function grouping($grouping,$leader){
        $arr = NULL;
        $index = NULL;
        $length = sizeof($grouping);

        for ($i=1; $i < $length ; $i++) { 
            if (!is_int($grouping[$i])){
                $index = sprintf("%.1f", $grouping[$i]);
                
                $arr[$index]= $grouping[$i];
            }
            else{
                $arr[$i]= $grouping[$i];
            }
        }

        foreach ($leader as $value) {
            if(isset($arr[$value])){
                var_dump($arr[$value]);
            }
        }
        var_dump($arr);
    }
}



}