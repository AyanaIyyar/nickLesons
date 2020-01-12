<?php
//The return keyword
/**
 * It returns a value in a function.
 */
function addNums($num1,$num2,$num3){
    $sum=$num1+$num2+$num3;
    return $sum;
}
function diffNums($num1,$num2,$num3){
    $diff=$num1-$num2-$num3;
    return $diff;
}
//Function Calling
print "<b>The sum of the three values is : </b>" . addNums(23,12,9) . "<br>";
print "<b>The difference of the three values is : </b>" . diffNums(23,12,9) . "<br>";