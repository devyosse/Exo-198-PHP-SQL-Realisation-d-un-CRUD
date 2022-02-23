<?php

require __DIR__ . "/class/Database.php";
require __DIR__ . "/function/student.php";

$object = new Database();
$start = $object->getInstance();

//newStudent('Parker', 'Peter', 24, $start); OK
//updateStudent('Olivier', 'De la paix', 100, 1, $start); OK

deleteStudent(1, $start);