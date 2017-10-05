<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		protected $firstName;
		protected $lastName;
		protected $superheroName;
		protected $villainName;

		public function __construct ($firstName, $lastName, $superheroName, $villainName) {
			parent::__construct($firstName, $lastName);
			$this->superheroName = $superheroName;
			$this->villainName = $villainName;
		}

		public function getSuperheroName () {
			return $this->superheroName;
		}

		public function getVillainName () {
			return $this->villainName;
		}

		public function __toString () {
			$str = parent::__toString();
			$str = $str . 'Congratulations! You are now a certified superhero. <br>'
				. 'You are the new <strong>' . $this->getSuperheroName() . '</strong> ! <br>'
				. 'Now go and beat the daylight out of <strong>' . $this->getVillainName() .'</strong> ! <br>';
			return $str;
		}
	}
?>
