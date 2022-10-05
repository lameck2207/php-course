<?php

// Function which prints "Hello I am Zura"

// Function with argument
function hello($name)
{
    echo "Hello I am $name";
}
echo hello('Zura').'<br>';
echo hello('Brad').'<br>';
// Create sum of two functions

// Create function to sum all numbers using ...$nums
// function sum(...$nums)
// {
// $sun = 0;
// foreach ($nums as $n) {
// $sun += $n;
// }
// return $sun;
// }
// echo sum(1, 2, 3, 4, 5, 6);
// Arrow functions
function sun(...$nums) {
return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sun(1, 2, 3, 4, 5, 6);