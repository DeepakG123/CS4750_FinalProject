
<?php
$con = mysqli_connect('cs4750.cs.virginia.edu', 'dzg4az_c', 'Ohtahv8I'); 

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(!empty($_POST)){
	$sql = "INSERT INTO users (firstName, middleName, lastName, major, school, year, phoneNumber, email, userID)
	VALUES 
	('$_POST[firstName]', '$_POST[middleName]', '$_POST[lastName]', '$_POST[major]', '$_POST[school]', '$_POST[year]', '$_POST[phoneNumber]', '$_POST[email]', DEFAULT)"; 

	if($sql === false){
	    die("ERROR: Could not INSERT " . mysqli_connect_error());
	}
}

mysqli_close($con);

?>