<?php

class Company{
 
	// property class company
	public $name;	
 
 	// method set class company
	public function setCompanyName($name){
		$this->name = $name;
	}

	// method get class company
	public function getCompanyName(){
		return $this -> name;
	}
}
class Department extends Company{
 
	// property class department
	public $name;
 
 	// method set class department
     public function setDepartmentName($name){
		$this->name=$name;
	}

	// method get class department
	public function getDepartmentName(){
		return $this -> name;
	}
}

class Employee extends Department {
	public $name;
	public $title;
	public $salary;
	  public function setEmployeeName($name){
		 $this->name=$name;
	 }
 
	 public function getEmployeeTitle(){
		 return " Employee "+$name+$title
	 }
	 public function getEmployeeProfile(){
		$a = $this->getCompanyName();
		$b = $this->getDepartmentName();    
		$c = $this->getEmployeeTitle();
		  return "$a <br /> $b <br /> $c";
	 }
	 public function getEmployeeSalary(day){
		 return $salary*day ;
	 }
}
?>