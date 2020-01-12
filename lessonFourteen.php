<?php
for ($num1=1;$num1<=10;$num1++){
    if ($num1==2 || $num1==3 || $num1==5 || $num1==7){
        continue;
    }
    print "<b>The count is : </b>" . $num1 . "<br>";
}