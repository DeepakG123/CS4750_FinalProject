<?php 
function addUser($firstName, $middleName, $lastName, $major, $school, $year, $phoneNumber, $email)
{
	global $db;
	
   $query = "INSERT INTO users VALUES(:firstName, :middleName, :lastName, :major, :school, :year, :phoneNumber, :email)";
   
   echo "addUser: $firstName : $major : $year <br/>";
   $statement = $db->prepare($query);
   $statement->bindValue(':firstName', $firstName);
   $statement->bindValue(':middleName', $middleName);
   $statement->bindValue(':lastName', $lastName);
   $statement->bindValue(':major', $major);
   $statement->bindValue(':school', $school);
   $statement->bindValue(':year', $year);
   $statement->bindValue(':phoneNumber', $phoneNumber);
   $statement->bindValue(':email', $email);
   $success = $statement->execute();     // if the statement is successfully executed, execute() returns true
   // false otherwise
   if(sucesss)
    	echo "Insert Sucessfull!"; 	
   else
   		echo "Insert Failure"; 

   $statement->closeCursor();
}


?>