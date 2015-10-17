<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register('AutoLoader');
function AutoLoader($className){
	$class=str_replace('\\', DIRECTORY_SEPARATOR, $className)
	require_once 'vendor/'.$class.'php';
}

//require_once 'vendor/AbstractPerson.php';
//require_once 'vendor/Employee.php';

use Academy\Employee;

$person1 = new Employee('slaw', 'sal', '99', 'M');

$person2 = new Employee('slaw2', 'sal2', '99', Employee::GERNDER_MALE, '10', 'cos');

echo $person1->hello();

$person1
->setName('name1')
->setSalary(55);

echo '<br/>';

echo $person1->hello();
