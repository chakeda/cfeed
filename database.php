<?php

class database{

	private $conn;
	
	public function __construct($conn="") {
		$this->conn = mysqli_connect("","","","") or die(mysql_error());
	}
	
	public function connect() {
		return $this->conn;
	}
	
	public function close(){
		unset($this->connection);
		return true;
	}
	
}

?>
