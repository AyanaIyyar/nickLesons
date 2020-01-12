<?php
//if...else if...else / Nesting if
/**
 * It evaluates different conditions and return their respective TRUE results
 * if their respective conditions are TRUE and a FALSE result if none of the
 * conditions are TRUE.
 *
 * Syntax
 * if (condition 1)
 * {
 *      statement(s) 1
 * }
 * else if (condition 2)
 * {
 *      statement(s) 2
 * }
 * else if (condition 3)
 * {
 *      statement(s) 3
 * }
 * .
 * .
 * .
 * else{
 *      statement(s) x
 * }
 */
$num1=23;
if ($num1>=1 && $num1<=5){
    print "The value ranges between 1 and 5";
}
else if ($num1>=6 && $num1<=10){
    print "The value ranges between 6 and 10";
}
else if ($num1>=11 && $num1<=15){
    print "The value ranges between 11 and 15";
}
else{
    print "Invalid Range";
}