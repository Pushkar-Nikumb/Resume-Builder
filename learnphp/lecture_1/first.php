<?php

$name = "Pushkar Nikumb";
$stud_name_using_array_func = array();
$stud_name = ['p','o','b'];
$stud_name_21 = [45,4.03,'p',"Pushkar",['p',2,65.565,"Pushkar"]];
//echo $stud_name_21[0];
echo "<pre>";
print_r($stud_name_21);
echo count($stud_name_21);
echo $name;

function funn($name = "Pushkarrrrrrrrrrrrrr")
{
    global $name;

    echo $name; 
 echo "<h1> my name is : $name </h1>";
}
funn();
funn($stud_name_21[4][3]);
?>
