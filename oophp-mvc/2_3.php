<?php

// echo 'test';

/**
 * Define a class
 */
class User {

    // properties (attributes)
    // public $name = 'Laura';
    public $name;


    // methods (functions)
    public function sayHello(){
        // To access property or method from within a method
        // use $this keyword
        return $this->name . ' says Hello';
    }
}

/**
 * Instantiate a user object from class
 */

$user1 = new User;

echo $user1->name;
echo '<br>';
echo $user1->sayHello();
echo '<br><br>';

// New user
$user2 = new User;
echo $user2->name = "Joke";
echo '<br>';
echo $user2->sayHello();