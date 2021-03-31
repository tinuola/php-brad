<?php

# For loop
// Number of times known
// @params - initializer, condition, increment

for($i = 0; $i <= 10; $i++){
    echo 'Number ' . $i;
    echo '<br>';
}


# While
// Number of times/set condition is unknown
// @params - Takes a condition
// Variables set outside of the loop

$j = 11;

while($j <= 20){
    echo 'Number ' . $j;
    echo '<br>';
    $j++;
}


# Do While
// Always runs at least once
// @params - condition

$k = 21;

do {
    echo 'Number ' . $k;
    echo '<br>';
    $k++;
}

while($k <= 25);


# Foreach
// Works with arrays

$people = array('Lola', 'Tola', 'Sandy', 'Cynthia');

// foreach(array_name as variable)
foreach($people as $person){
    echo $person;
    echo '<br>';
}

// Foreach with associative array

$surnames = array('Lola' => 'Fa', 'Tola' => 'F', 'Sandy' => 'A', 'Cynthia' => 'C');

foreach($surnames as $person => $last_name){
    echo $person . ' ' . $last_name;
    echo '<br>';
}