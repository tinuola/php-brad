<?php

# Conditionals test for values, compare values

/*
    == matches value
    === matches value and data type / is identical
    <, >
    != not equal
    !==  not identical
*/

$num = 5;

if ($num == 5){
    echo "5 passed";
} else if($num = 6){
    echo '6 passed';
} else {
    echo "Did not pass";
}

# Nesting

$num = 5;

if($num > 5){
    if($num < 10 ){
        echo "$num passed";
    }
}

// Better to use logical conditions
/**
 * && - AND
 * || - OR
 * xor - exclusive or - one condition has to be true but not both
 */


if ($num > 4 AND $num < 10){
    echo "$num passed";
}

// Switches

$favColor = 'Yellow';

switch($favColor){
    case 'red': 
        echo 'Your favorite color is red';
        break;
    case 'blue': 
        echo 'Your favorite color is blue';
        break;
    case 'green': 
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is something else';
}