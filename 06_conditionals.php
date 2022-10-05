<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo "1";
}

// Without circle braces
if ($age === 20) echo "1";
// Sample if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}
// Difference between == and ===
$age == 20; // true
$age =='20'; // true

$age === 20; // true
$age ==='20'; // false
// if AND
if ($age > 20 || $salary === 300000) {
    echo "Do something";
}
// if OR

// Ternary if
echo $age < 22 ? 'young' : 'old';

// Short ternary
$myage = $age ?: 18;
echo '<pre>';
var_dump($myage);
echo '<pre>';
// Null coalescing operator
$myname = isset($name) ? $name : 'John';
$myname = $name ?? 'John';
// switch
$userRole = 'admin'; // editor, user, admin
switch ($userRole) {
    case 'admin':
    echo 'admin';
    break;
    case 'editors':
        echo 'editor';
        break;
     case 'user':
        echo 'user';
      break;
      default:
      echo 'invalid role';          
}