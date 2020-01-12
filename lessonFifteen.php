<?php
// Indexed Arrays
/**
 * These are arrays indexed by values. The first item in this array is
 * assigned index 0, the second item index 1 and so on.
 */
//Creating an array using array() function
$cars=array(
    "Range Rover", // placed at index 0
    "Land Cruiser", // placed at index 1
    "Prado", // placed at index 2
    "Toyota Hilux", // placed at index 3
    "Mercedes Benz" // placed at index 4
);
print "<p>The following is a list of cars : </p>";
print "<ol>";
for ($count=0;$count<=4;$count++){
    print "<li>" . $cars[$count] . "</li>";
}
print "</ol>";