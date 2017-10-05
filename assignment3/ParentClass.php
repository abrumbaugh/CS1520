<?php
	// This is the file for the parent class

	class ParentClass {

		protected $firstName;
		protected $lastName;

		public function __construct ($firstName, $lastName) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}

		public function getFirstName () {
			return $this->firstName;
		}

		public function getLastName () {
			return $this->lastName;
		}

		public function __toString () {
			return 'Hello <strong>' . $this->getFirstName() . ' ' . $this->getLastName() . '</strong> ! <br>';
		}
	}
?>
