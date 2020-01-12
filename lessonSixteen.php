<?php
// Indexed Arrays
/**
 * These are arrays indexed by values. The first item in this array is
 * assigned index 0, the second item index 1 and so on.
 */
//Creating an array using array identifier []
$cars[]="Subaru"; // assigned index 0
$cars[]="Fielder"; // assigned index 1
$cars[]="Belta"; // assigned index 2
$cars[]="Axio"; // assigned index 3
$cars[]="Premio"; // assigned index 4
print "<p>The following is a list of cars : </p>";
print "<ul>";
for ($count=0;$count<=4;$count++){
    print "<li>" . $cars[$count] . "</li>";
}
print "</ul>";