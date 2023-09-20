<?php

// Task 3
$n = 7;
$num1 = 0;
$num2 = 1;

echo "Printing the first ". $n+3 ." Fibonacci numbers but not greater than 100: <br>";
echo PHP_EOL;

echo $num1;
echo ", ".$num2;

for($i = 0; $i <= $n; $i++){
    
    $num3 = $num1 + $num2;
    if($num3 > 100){
        break;
    } else {
        echo ", ".$num3;
    }

    $num1 = $num2;
    $num2 = $num3;
}
echo ".";

echo PHP_EOL;
echo "<br>";
echo "<br>";

// ========================================
// Task 4
function fibonacciNumbers($n, $num1 = 0, $num2 = 1){

    echo "Printing the first $n(Argument) Fibonacci numbers using Function: <br>";
    echo PHP_EOL;

    echo $num1;
    echo ", ".$num2;

    for($i = 0; $i < $n-2; $i++){

        $num3 = $num1 + $num2;

        echo ", ".$num3;

        $num1 = $num2;
        $num2 = $num3;
    }
    echo ".";
}
fibonacciNumbers(15);

echo PHP_EOL;