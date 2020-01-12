<?php
//Compound Assignment Operators
/**
 * They initialize variables and perform computations at the same time.
 * They include: +=, -=, *=, /= and %=
 * For instance, a+=b; is the same as a=a+b;
 * E.g. Given that a=2 and b=3 using the formula above, find a.
 */
//Declaring and Initializing Variables for computations
$num1=23;
$num2=12;
//Using Compound Assignment Operators to perform different computations
$num1+=$num2; // Same as $num1=$num1+$num2
$num2-=$num1; // Same as $num2=$num2-$num1
print "<b>Result One : </b>" . $num1 . "<br>";
print "<b>Result Two : </b>" . $num2 . "<br>";
