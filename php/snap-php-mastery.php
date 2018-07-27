<?php

class Student {

	private $studentName;
	private $studentAge;
	private $studentBirthdate;

	public function __construct($newUserId, string $newUserEmail, string $newUserHash, string $newUserName) {
		try {
			$this->setStudentName($newStudentName);
			$this->setStudentAge($newStudentAge);
			$this->setStudentBirthdate($StudentBirthdat);
		} catch (\InvalidArgumentException | \RangeException | \TypeError | \Exception $e) {
			// rethrow uncought by the mutators exceptions
			throw(new $exceptionType($e->getMessage(), 0, $e));
		}
	}

	public function getStudentName() : string
	{
		return($this->studentName);
	}

	public function setUserName($newStudentName)
	{
		// validate and sanitize
		// if no exceptions have been thrown, assign a new value to user password
		$this->studentName = $newStudentName;
	}


	/* all the rest of the class goes here */
}

function greetNewStudent (Student $newStudent) : string {
	return "Dear " .$newStudent->getStudentName() .",\nWelcome to our University!";
}


