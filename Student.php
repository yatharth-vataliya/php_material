<?php 
	require_once 'Person.php';
	class Student extends Person{
			
			private $numCourse=0;
			private $courses=array();
			private $grades=array();
			
			public function __construct($name,$address){
				parent::__construct($name,$address);
			}
			public function addCourseGrade($course,$grade){
				$this->courses[$this->numCourse]=$course;
				$this->grades[$this->numCourse]=$grade;
				++$this->numCourse;
			}
			public function printGrades(){
			/*	echo "<pre>";
				print_r($this->grades);
				echo "</pre>";
			*/	
				echo "Grades are ... <br/>";
				foreach($this->grades as $gradeKey=>$grade){
				echo "course {$this->courses[$gradeKey]} and grade {$grade} <br/>";
				}
			}			
			
			public function getAverageGrade(){
				$totalGrade=0.0;
				foreach($this->grades as $grade){
					$totalGrade+=$grade;
				}
				echo "Average Grade is ... <br/>";
				return ($totalGrade/$this->numCourse);
			}
			
			public function __toString(){
				return " ". parent::__toString();
			}
			
	}

?>