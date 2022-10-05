<?php

// while

// Loop with $counter
$counter = 0;
while ($counter < 10){
    echo $counter.'<br>';
    if ($counter === 5){
        break;
    }
    $counter++;
}
// do - while
do {
    echo $counter;
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo $i.'<br>';
}

// foreach
$fruits = [ "Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
 echo $i.' '.$fruit.'<br>';   
} 
// Iterate Over associative array.
$person = [
    'name' => 'Brand',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Vedio Games']
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
      echo $key .' '. implode(",", $value) .'<br>';  
    } else {
        echo $key .' '. $value .'<br>'; 
    }
}
