<?php

// What is class and instance

require_once "person.php";
require_once "student.php";

$student = new student("Brad", 'Traversy', '1234');
echo '<pre>';
var_dump($student);
echo '</pre>';
// $p = new person("Brad", "Traversy");
// $p->setAge(30);
// echo '<pre>';
// var_dump($p);
// echo '<pre>';
// echo $p->getAge();

// $p2 = new person('Lameck', 'Smith');
// echo '<pre>';
// var_dump($p2);
// echo '<pre>';
// echo person::$counter;

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter