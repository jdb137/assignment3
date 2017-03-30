<?php
	// This is the file for the parent class

	class ParentClass {
		private $cookies;

		public function __construct($value){
			$this->cookies=$value;
		}

		public function addcookie($numcookies){
			$this->cookies+=$numcookies;
		}

		public function getcookie(){
			return (int)$this->cookies;
		}

		public function __toString(){
			return (string)$this->cookies;
		}
	}
?>
