<?php
abstract class AbstractPerson
{
	const GERNDER_MALE='M';
	const GERNDER_FEMALE='F';
	
	private $name;
	private $surname;
	private $age;
	private $gender;
	
public function __construct($name, $surname, $age, $gender)
        {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->gender=$gender;    
        }

public function setName($name)
{
	$this->name=$name;
	return $this;
}
public function getName()
{
	return $this->name;
}

public function setSurname($surname)
{
	$this->surname=$surname;
	return $this;
}
public function getSurname()
{
	return $this->name;
}

public function setAge($age)
{
	$this->age=$age;
	return $this;
}
public function getAge()
{
	return $this->age;
}

public function setGender($gender)
{
	$this->gender=$gender;
	return $this;
}
public function getGender()
{
	return $this->gender;
}

public function hello()
{
    return $this->name." ".$this->surname;
}
}