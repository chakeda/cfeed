<?php

require("database.php");

class functions extends database {
	
	public function addhttp($website) {
		if (!preg_match("~^(?:f|ht)tps?://~i", $website)) {
                    $website = "http://" . $website;
		}
		return $website;
	}
        
	public function striphttp($website) {
			if (preg_match("~^(?:f|ht)tps?://~i", $website)) { // regex
				$website = str_replace("http://","",$website);
			}
			return $website;
	}
	
	public function stripDots($website) { 
			$website = str_replace('.', '', $this->striphttp($website) );
			return $website;
	}
	
	public function stripSlash($website) {
			$website = array_shift(explode('/', $website, 2)); // This syntax only compatible with PHP 5.3
			return $website;
	}
	
	public function generateCode($platform){ // Problem: what happens if they already have jquery? no prob with blogger and wp. 
			if ($platform === 'universalcode'){
				$script_code = '&lt;script type="text/javascript" src="http://www.kitechristianson.com/cfeed/datauc.php"&gt;&lt;/script&gt;';
			}
			elseif ($platform === 'wordpress'){
				$script_code = '&lt;script type="text/javascript" src="http://www.kitechristianson.com/cfeed/data.php"&gt;&lt;/script&gt;';
			}
			elseif ($platform === 'blogger'){
				$script_code = "&lt;script type='text/javascript' src='http://www.kitechristianson.com/cfeed/datablogger.php'&gt;&lt;/script&gt;";
			}
			else{
				$script_code = 'you did not select a platform'; //This is filler: unused. 
			}
			return $script_code;
	}
	
	// 12-15-14: This does not build a table on kitechristianson domain. Restrictions on database priviledges? 
	public function createWebsiteFeedTable($website){
			$conn = parent::connect();
			$sql = "CREATE TABLE 
				`mytest`.`cfeed_".$website."` 
				(
				`id` INT(200) NOT NULL AUTO_INCREMENT,
				`ip` VARCHAR(30),
				`camefrom` VARCHAR(100),
				`cameto` VARCHAR(100),
				`timestamp` VARCHAR(100) NOT NULL,
				`website` VARCHAR(100) NOT NULL,
				`favicon` VARCHAR(100) NOT NULL,
				`country` VARCHAR(100) NOT NULL,
				`city` VARCHAR(100) NOT NULL
				PRIMARY KEY (`id`)
				)"; 
			mysqli_query($conn,$sql);
			$conn = parent::close();
			
	}

	public function newUser($website, $password){ 
		$conn = parent::connect();
		$sql = "INSERT INTO cfeed_members (website, password) VALUES('$website', '$password')";
		mysqli_query($conn,$sql);
                $conn = parent::close();
	}
	
	// stub methods
	public function fieldsEntered($fields){
		echo "filler";
	}
	
	
        
}

?>