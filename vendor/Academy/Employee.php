<?php

namespace Academy;
//require_once 'AbstractPerson.php';
class Employee extends AbstractPerson
{
	private $salary;
	private $commision;
	
public function setSalary($salary)
{
	$this->salary=$salary;
	return $this;
}
public function getSalary()
{
	return $this->salary;
}

}