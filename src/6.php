<?php 
class Student{

	protected $name;
	protected $gradePerCourse;
	const MINIMUM_GRADE_TO_PASS = 10;

	function __construct($name){
		$this->name = $name;
		$gradePerCourse = [];
	}

	public function addGrades($courseName, $grade)
	{
		$this->gradePerCourse[$courseName] = $grade;
	}
	public function getAverageGrade()
	{
		$numberOfCourses = count($this->gradePerCourse);
		$sum = 0;
		foreach ($this->gradePerCourse as $grade) {
			$sum += $grade;
		}
		return $sum / $numberOfCourses;
	}
	public function getFailedCourse()
	{
		$result = array_filter($this->gradePerCourse, function($grade){
			return $grade < self::MINIMUM_GRADE_TO_PASS;
		});
		return $result;
	}
	public function getPassCourse()
	{
		return array_filter($this->gradePerCourse, function($grade){
			return $grade >= self::MINIMUM_GRADE_TO_PASS;
		});
	}
	public function getCourseList()
	{
		return array_keys($this->gradePerCourse);
	}
	public function getCourseByGrade($grade)
	{
		return array_search($grade,$this->gradePerCourse);
	}
}

$student = new Student("hosein");
$student->addGrades("algorithm",12);
$student->addGrades("os",12);
$student->addGrades("math",9);
//print_r($student->getAverageGrade());
//print_r($student->getFailedCourse());
//print_r($student->getCourseList());
print_r($student->getCourseByGrade(12)."\n");