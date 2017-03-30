<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $cookies;

		public function __construct($value){
			$this->cookies=$value;
		}

		public function multiplycookie($value){
			$this->cookies*=$value;
		}
		public function __toString(){
			return (string)$this->cookies;
		}
	}
?>
