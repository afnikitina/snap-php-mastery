<?php

class Student {

	private $studentName;
	private $studentAge;
	private $studentPassedClass;

	public function __construct(string $newStudentName, int $newStudentAge, bool $newStudentPassedClass) {
		try {
			$this->setStudentName($newStudentName);
			$this->setStudentAge($newStudentAge);
			$this->setStudentPassedClass($newStudentPassedClass);
		} catch (\InvalidArgumentException | \RangeException | \TypeError | \Exception $e) {
			// rethrow uncought by the mutators exceptions
			throw(new $exceptionType($e->getMessage(), 0, $e));
		}
	}

	public function getStudentName() : string
	{
		return($this->studentName);
	}

	public function setStudentName(string $newStudentName)
	{
		// validate and sanitize
		// if no exceptions have been thrown, assign a new value to student name
		$this->studentName = $newStudentName;
	}

	public function getStudentAge() : int
	{
		return($this->studentAge);
	}

	public function setStudentAge(int $newStudentAge)
	{
		// validate and sanitize
		// if no exceptions have been thrown, assign a new value to student age
		$this->StudentAge = $newStudentAge;
	}

	public function getStudentPassedClass() : bool
	{
		return($this->studentPassedClass);
	}

	public function setStudentPassedClass(bool $newStudentPassedClass)
	{
		// validate and sanitize
		// if no exceptions have been thrown, assign a new value to student passed class (true of false)
		$this->studentPassedClass = $newStudentPassedClass;
	}

	/* all the rest of the class goes here */
}

function greetNewStudent (Student $newStudent) : string {
	return "Dear " .$newStudent->getStudentName() .",\nWelcome to our University!";
}

// test a function

$newStudent = new Student("Will", 20, true);
echo greetNewStudent($newStudent);

