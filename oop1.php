<?php
	class Employee {
	
		public $name;
		public $age;
		public $salary;
		
		
		 public function changeAge($age){
			if ($this->age > 18){
				$this->age= 99; 
				echo $this->age;
			} 
		 }
	}
	
	$user = new Employee; 
	$user->name = 'john';
	$user->age = 19; 
	$user->salary = 1000;

			
	var_dump ( $user->changeAge($user->age )); 
?>