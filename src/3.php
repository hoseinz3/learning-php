<?php
$grades = [10, 11, 12, 13, 9];
const MINIMUM_GRADE_TO_PASS = 10;

$courses = ['algorithm', 'database', 'O.S', 'computer hardware', 'math'];

for ($i = 0; $i < count($grades); $i++) {
    if ($grades[$i] < MINIMUM_GRADE_TO_PASS)
        echo "you are fail in course " . $courses[$i] . "\n";
    else
        echo "you are pass in course " . $courses[$i] . "\n";
}

$index = array_search('algorithm', $courses);
if ($index != false)
    echo "in array";
else
    echo "searching fail";
echo "\n";
