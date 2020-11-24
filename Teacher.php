<?php 
		require_once 'Person.php';
	class Teacher extends Person{
		private $numCourses=0;
		private $courses=array(0=>"temp");
		
		public function __construct($name,$address){
			parent::__construct($name,$address);
		}
		public function addCourse($course){
			$match=true;
			foreach($this->courses as $courseKey=>$courseValue){
				if($courseValue==$course){
					$match=true;
					break;
				}else{
					$match=false;
				}
				
			}
			if($match){
					return false;
				}else{
					$this->courses[$this->numCourses]=$course;
					$this->numCourses++;
				}
			echo "<pre>";
			print_r($this->courses);
			echo "</pre>";
			
		}
		public function removeCourse($course){
			$match=false;
			$key="";
			foreach($this->courses as $courseKey=>$courseValue){
				if($courseValue==$course){
					$match=true;
					$key=$courseKey;
					break;
				}
								
			}
			if($match){
				unset($this->courses[$key]);
				//return true;
			}else{
					return false;
				}
			echo "<pre>";
			print_r($this->courses);
			echo "</pre>";
			
		}
		
		public function __toString(){
			return parent::__toString();
		}
		
	}
	

?>