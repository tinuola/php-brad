<?php

# Single line comment
echo 'hello';

// print can return values
print 'world';

/*
variables:
must be prefixed with $
otherwise it's seen as a constant
start with letters, numbers, and underscores
*/

$output = 'Hello again';

echo $output;

// Datatypes
/*
Strings
Integers
Floats - decimals
Booleans
Arrays
Objects
NULL
Resource
*/

// Concatenation
$str1 = "Bye";
$str2 = "Byeee";
$greeting = $str1 .' '. $str2.'!';
echo $greeting;

// Using "" for concatenation
// Using '' , php will think the variables are strings
$greeting2 = "$str1 $str2";
echo $greeting2;

# Constants
// Start with define keyword, name with uppercase, and followed by value

define('GREETING', 'Hello All');

echo GREETING;

// use boolean true to make constant case insensitive:

define ('SALUTATION', 'Hello World', true);
echo salutation;