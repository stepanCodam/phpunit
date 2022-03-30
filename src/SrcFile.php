<?php
namespace TDD;

class SrcFile  {

    public function sum (array $numbers = []){

        return array_sum($numbers);
    }
    public function ageCalc($current, $birth){
        return($current - $birth);
    }
    public function averageVal(array $values = []){
        return(array_sum($values)/count($values));
    }

}


?>