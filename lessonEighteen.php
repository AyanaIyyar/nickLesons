<?php
//Multidimensional Arrays
/**
 * These are arrays of arrays.
 */
$person=array(
    array(
        "first_name"=>"Jack",
        "last_name"=>"Mwangi",
        "age"=>38,
        "profession"=>"Trainer/Software Developer",
        "company"=>"eMobilis Mobile Technology Institute"
    ),
    array(
        "first_name"=>"Dorine",
        "last_name"=>"Okumu",
        "age"=>33,
        "profession"=>"Front Office",
        "company"=>"Coop Bank"
    ),
    array(
        "first_name"=>"Steve",
        "last_name"=>"Mwangi",
        "age"=>34,
        "profession"=>"Support Staff",
        "company"=>"Safaricom Ltd"
    ),
    array(
        "first_name"=>"Evelyne",
        "last_name"=>"Mwangi",
        "age"=>37,
        "profession"=>"Customer Service",
        "company"=>"Radisson Blu"
    ),
    array(
        "first_name"=>"Emmanuel",
        "last_name"=>"Gathu",
        "age"=>38,
        "profession"=>"Head Chef",
        "company"=>"Nairobi Safari Club"
    )
);
print "<h3>Personal Details</h3><hr>";
for ($count=0;$count<=4;$count++){
    print "<b>Full Names : </b>" . $person[$count]["first_name"] . " " . $person[$count]["last_name"] . "<br>";
    print "<b>Age : </b>" . $person[$count]["age"] . "<br>";
    print "<b>Profession : </b>" . $person[$count]["profession"] . "<br>";
    print "<b>Organization : </b>" . $person[$count]["company"] . "<hr>";
}