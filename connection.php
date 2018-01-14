<?php
	function connect($dbname){
		$dbhost = "localhost";
		$dbuser = "root";
		$pass = "";
		$con = mysqli_connect($dbhost,$dbuser,$pass,$dbname);
		if($con -> connect_errno)
		{
			echo $con->connect_error;
			die("Unable to connect to database");

		}
		else {
					echo "connection successful";
			return $con;
		}
		
	}



/*function validate($con,$data){
	// foreach ($data as $key=>$val){
	// 	if(!is_array($val)){
	// 		$data[$key]=mysqli_real_escape_string(htmlspecialchars(trim($val)));
	// 	}
	// 	else{
	// 		//the later part is for array validation
	// 		foreach($val as $key2=>$val2){
	// 			$data[$key][$key2]=$val2;
	// 		}
	// 	}
	// }
	return $data;
}*/
?>
