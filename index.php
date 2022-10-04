<?php


// Print Functions;

//Difference in echo an print;

//Echo Get Multiple Values;
echo"Hello world","Hi Ameer Ali";

//Print only get on value;
print("hello");

// Php buildin Function for multiple values like complete html page;
//Starting point;
echo<<<my
<h1>Hello World</h1>
<br>
<h2>Hi Ameer ali</h2>

my;
//Ending point

//Variables
$num=3.4;
echo "Is num : ",$num;

//const variable first name is const variable name and after values;
define("a","Hello const variable");


//Dump use for value check any argument;
var_dump($num);
?>