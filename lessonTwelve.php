<?php
//do...while loop
/**
 * It loops a statement and increments it first before the condition is met.
 * The condition comes as the last item in the loop.
 *
 * Syntax
 * do{
 *      loop statements
 *      increase/decrease
 * } while(condition);
 */
$num1=15;
do{
    print "<b>The count is : </b>" . $num1 . "<br>";
    $num1++;
} while($num1<=40);