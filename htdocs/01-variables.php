<h1><?php

echo "Hello World!";

?></h1>

<?php
//Single line comment
#Single line comment
/*
   Multiline
   Comment
*/
echo "wassup\n"; /* use option key for a back slash*/
echo '<br>';
print 'Yokoso warudo';

#Variables
/*
    -Prefix $
    -Start with a letter or an underscore
    -Only letters, numbers and underscores
    -Case sensitive
*/

#Data types
/*
    -String
    -Integers
    -Floats
    -Booleans
    -Arrays
    -Objects
    -NULL
    -Resource (a return or reference to a function, not a data type)
*/

$output1 = 'private mir \n';
echo $output1;
echo nl2br($output1);

$output2 = 'private mir \n';
echo $output2;
echo nl2br($output2);
echo '<br>';

$num1 = 4;
$float1 = 3.2;
$bool1 = true;

$num2 = 10;
$sum = $num1 + $num2;
echo $sum;
echo '<br>';

$string1 = "Guten";
$string2 = "Morgen";
//$greeting = $string1 + $string2;
//echo $greeting; //this is an error

$greeting2 = $string1 . $string2;
echo $string2;
$greeting3 = $greeting2 . '<br>';
echo $greeting3;

$greeting4 = 'They\'re here!' . '<br>';
echo $greeting4;

#Constant
define('HOLA', 'Hello Everyone');
echo HOLA;

?>

