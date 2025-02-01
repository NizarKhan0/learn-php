<?php

class MathUtility{
    public static $pi = 3.14;

    //static method bole terus pass class name 
    public static function add(...$numbers){
        return array_sum($numbers);
    }
}

//terus access
echo MathUtility::$pi . '<br>';
echo MathUtility::add(1,2,3,4,5) . '<br>';

// $mathUtil1 = new MathUtility();
// $mathUtil2 = new MathUtility();
// echo $mathUtil1->pi . '<br>';
// echo $mathUtil2->pi . '<br>';
?>