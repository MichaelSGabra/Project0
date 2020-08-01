<?php

//echo 'hello ramy';
//print 'hello ramy from print not echo ... echo is faster';
// print statement returns a value 1 so that u could use for something else 
# echo does not return so faster
/*
*/

//$output is variable 
// Prefix must have $ or it will be looked as a constant
//names for variables are case sensitive
// they can start with a letter  or underscore
// only letters, numbers or underscored

// Dont forget semicolons, it will cause an error.

$michael = 'Hello world!';
//echo $michael;

#Data Types
/*

String
Integers
floats
booleans
arrays
objects
null
resource
*/

$num1 = 4;
$num2 = 3;
$float1 = 4.4;
$bool1 = true;
$sum = $num1 + $num2;
//echo $sum;

$string1 = 'Hello Ramy and ';
$string2 = 'Michael ';
// you cant add string with + ... to concatenate you have to use '.'
$greeting = $string1 . $string2 . '!';
//echo $greeting;

// use double quotes to concatenate

$greeting2 = "$string1 $string2";
//echo $greeting2;


$string3 = 'They\'re here';
// 3ashan ye2bal el quotation mark el fel nos and doesnt get confused or use double quotation

//define('GREETING' , 'HELLO EVERYONE', true);
//echo greeting;
// To deine constants for example server name
// use constants , you have to use the define function
// to avoid case sensitivity add ',true'














































?>