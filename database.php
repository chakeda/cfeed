<?php

class database{

	private $conn;
	
	public function __construct($conn="") {
<<<<<<< HEAD
		$this->conn = mysqli_connect("") or die(mysql_error());
=======
		$this->conn = mysqli_connect("","","","") or die(mysql_error());
>>>>>>> f7001a9b629ec3ad2967db75065ab572eea9c383
	}
	
	public function connect() {
		return $this->conn;
	}
	
	public function close(){
		unset($this->connection);
		return true;
	}
	
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> f7001a9b629ec3ad2967db75065ab572eea9c383
