<?php 
$studentsGradeInCourse =
            [
                'hosein'=>[
                    'algorithm'=>10, 'database'=>11, 'O.S'=>12, 'computer hardware'=>13, 'math'=>9
                ],
                "ali"=>[
                    'algorithm'=>20, 'database'=>10, 'O.S'=>11, 'computer hardware'=>3, 'math'=>19
                ]
            ];
PRINT_R(ARRAY_column($studentsGradeInCourse, 'database'));


PRINT_R(ARRAY_MAP(FUNCTION($key){
	return [
		'algorithmCourse' => $key['algorithm'],
		'databaseCourse' => $key['database'],
		'O.SCourse' => $key['O.S'],
		'computerHardwareCourse' => $key['computer hardware'],
		'mathCourse' => $key['math'],

	];
}, $studentsGradeInCourse));
