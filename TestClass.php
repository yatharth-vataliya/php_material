<?php

	require_once 'Student.php';
	require_once 'Teacher.php';
	
	$student=new Student("yatharth","kalawad");
	$student->addCourseGrade("PHP",10);
	$student->addCourseGrade("java",8);
	$student->printGrades();
	echo $student->getAverageGrade()."<br/>";
	echo $student."<br/>";
	$teacher=new Teacher("yatharth Profe","Rajkot");
	$teacher->addCourse("PHP Advanced");
	$teacher->addCourse("PYTHON Advanced");
	$var=$teacher->removeCourse("PYTHON Advanced");
	if($var)
		echo "true";
	else
		echo "false";
	
	echo $teacher;

?>