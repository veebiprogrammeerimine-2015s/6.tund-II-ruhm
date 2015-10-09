<?php
	
	// functions.php
	require_once("../configglobal.php");
	$database = "if15_romil_2";
	
	//loome uue funktsiooni, et küsida ab'ist andmeid
	function getCarData(){
		
		$mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"], $GLOBALS["server_password"], $GLOBALS["database"]);
		
		$stmt = $mysqli->prepare("SELECT id, user_id, number_plate, color FROM car_plates");
		$stmt->bind_result($id, $user_id, $number_plate, $color_from_db);
		$stmt->execute();
		
		$row = 0;
		
		// tee tsüklit nii mitu korda, kui saad 
		// ab'ist ühe rea andmeid
		while($stmt->fetch()){
			
			echo $row." ".$number_plate."<br>";
			$row = $row + 1;
		}
		
		// 0,1,2,3,4,5,
		
		$stmt->close();
		$mysqli->close();
		
		
	}
	
	
	
	//$name = "Romil";
	//echo "Tere ".$name;
	
	
?>