<?php
# Functions - code that can be repeatedly called

// Declaring a function
function simpleFunction()
{
    echo 'Hello World <br>';
}
// Run 
simpleFunction();


// Including parameters/arguments
// function sayHello($name)

// With default argument
function sayHello($name = ' You')
{
    echo "Hello $name<br>";
}

// sayHello('Lara');
sayHello();


// Return values from Function
function  addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

echo addNumbers(2,3);
echo '<br>';


// Passing arguments by Reference

$myNum = 10;

function addFive($num)
{
    $num += 5;
}

// Using & passes variable by reference
function addTen(&$num)
{
    $num += 10;
}

// This won't change the value of myNum
addFive($myNum);
echo "Value: $myNum<br>";

// This will increment myNum
addTen($myNum);
echo "Value: $myNum<br>";