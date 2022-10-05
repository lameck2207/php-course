<?php

require_once "person.php";

class student extends person
{
public string $studentid;

public function __construct($name, $surname, $studentid)
{
    parent::__construct($name, $surname);
    $this->age = 18;
    $this->student = $studentid;
}
}

