<?php
//Associative Arrays
/**
 * These are arrays indexed by strings.
 */
$person=array(
    "first_name"=>"Jack",
    "last_name"=>"Mwangi",
    "age"=>38,
    "profession"=>"Trainer/Software Developer",
    "company"=>"eMobilis Mobile Technology Institute"
);
print "<h3>Personal Details</h3><hr>";
print "<b>Full Names : </b>" . $person["first_name"] . " " . $person["last_name"] . "<br>";
print "<b>Age : </b>" . $person["age"] . "<br>";
print "<b>Profession : </b>" . $person["profession"] . "<br>";
print "<b>Organization : </b>" . $person["company"] . "<br>";