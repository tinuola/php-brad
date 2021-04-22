<?php

// String functions

# substr()
# Returns portion of string
// $output = substr('Hello', 1);
// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);
// echo $output;

# strlen()
# String length
// $output = strlen('Hello World');
// echo $output;

# strpos()
# First occurrence of specified substr
// $output = strpos('Hello World', 'o');
// echo $output;

# strrpos()
# Last occurrence of specified substr
// $output = strrpos('Hello World', 'o');
// echo $output;

# trim()
# trims whitespace
// $text = "Hello world     ";
// var_dump($text);
// $trimmed = trim($text);
// var_dump($trimmed);

# strtoupper()
// $output = strtoupper('hello world');
// echo $output;

# strtolower()
// $output = strtolower('HELLO WORLD');
// echo $output;

# ucwords()
# capitalize every word
// $output = ucwords("hello world today");
// echo $output;

# str_replace()
# replace occurence of a search string
// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;

# is_string()
# checks if value is string
$val = 'Hello';
$output = is_string($val);
// echo $output;
// Returns 1 if true; nothing if false;

$values = [true, false, null, 'abc', 123, '123', 22.4, '22.4', '', ' ', 0, '0'];
foreach ($values as $value){
    if(is_string($value)){
        echo "{$value} is a string.<br>";
    }
}

# gzcompress()
# compress a string
$string = "
In this course we will go step by step to build a complete custom MVC (Model View Controller) framework Called TraversyMVC using object oriented PHP. We will build something similar to Codeigniter but much much lighter. This framework is completely open source and you are free to change the name, add stuff, etc and use it as your own. This framework will include...";
$compressed = gzcompress($string);
echo $compressed;

$uncompress = gzuncompress($compressed);
echo $uncompress;