<?php
// Indexed
// Associative
// Multidimensional

// Indexed

// Create array with keyword array
$people = array('Lola', 'Tola', 'Titi');
// echo $people[1];

// Create with angled brackets
$cars = ['Honda', 'Toyota', 'Ford'];
// echo $cars[0];

$ids = [23, 40, 13, 7];
// echo $ids[2];

// Adding to an array at a specific point
$cars[3] = 'Chevy';
// echo $cars[3];

// Adding to an array without specific position
$cars[] = 'BMW';
// echo $cars[4];

// echo count($cars);

// echo for arrays
// print_r($cars);

// var_dump($cars);

// Associative Arrays
// define key and values
$people = ['Brad' => 30, 'Susan'=>34, 'Jack'=>50];

// echo $people['Brad'];

$ids = array(340 => 'Tammy', 5019 => 'Kamala');
// echo $ids[5019];

// Add to associative array
$ids[8701] = 'Jill';
// echo $ids[8701];

// print_r($ids);

// var_dump($ids);

// Multi-dimensional
// Array within an array

$dogs = array(
    array('Akita', 10),
    array('Corgi', 15),
    array('Poodle', 12)
);

echo $dogs[1][0];