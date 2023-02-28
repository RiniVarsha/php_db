<?php
    // $var = (int)readline(); 
    // echo $var;
    // $var = 10;
    // $sum = 0;
    // for ($iter = 1; $iter <= $var; $iter++) {
        
    //     $var = $iter;
    //     while($var != 0){
    //         $sum = $sum + ($var % 10);
    //         $var = (int)($var / 10);
    //     }
    //     echo "\n";
    //     echo $sum;
    // }
    /*$num = (int)readline();
    if ($num % 2 == 0) {
        echo "Even";
    }
    else {
        echo "Odd";
    }*/
    function tableOfNumber($num) {
        $result = 1;
        for($iter = 1; $iter <=25; $iter++) {
            $result = $result*$num;
            echo "\n";
            echo $num."x".$iter."=".$result;
        }
    }
    tableOfNumber(3);
?>