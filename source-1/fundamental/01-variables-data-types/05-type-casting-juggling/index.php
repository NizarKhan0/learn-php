<?php 

    $number1 = 5;
    $number2 = 10;
    $number3 = '20';
    $fruit = 'apple';
    $bool1 = true;
    $bool2 = false;
    $null = null;

    //Implicit Conversion
    $result = $number1 + $number2;

    // int + string
    $result = $number1 + $number3; //int (string to int)

    // string + string 
    $result = $number3 + $number3; //int (string to int)

    $result = $number1 . $number2; //string (int to string)

    // $result = $fruit + $number2; //error

    // 5 + boolean(true) value jadi 1
    $result = $number1 + $bool1; //int (bool to int)

    // 5 + boolean(false) value jadi 0
    $result = $number1 + $bool2; //int (bool to int)

    $result = $number1 + $null; //int (null to int)

    //Explicit Conversion

    // int to string
    $result = (string) $number1;

    // string to int
    $result = (int) $number3;

    // string to boolean kalau value 0 dia jadi false
    $result = (bool) $number1;

    var_dump($result);
?>