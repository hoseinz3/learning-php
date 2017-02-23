<?php
$gradesInCourse = ['algorithm'=>10, 'database'=>11, 'O.S'=>12, 'computer hardware'=>13, 'math'=>9];
const MINIMUM_GRADE_TO_PASS = 10;

foreach ($gradesInCourse as $course => $grade) {
	if($grade < MINIMUM_GRADE_TO_PASS)
		echo "you are fail in course " . $course . "\n";
	else
		echo "you are pass in course " . $course . "\n";
}

asort($gradesInCourse);
print_r($gradesInCourse);
ksort($gradesInCourse);
print_r($gradesInCourse);
