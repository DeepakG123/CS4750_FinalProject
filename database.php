<?php 
function addUser($firstName, $middleName, $lastName, $major, $school, $year, $phoneNumber, $email)
{
	global $db;
	
   $query = "INSERT INTO users VALUES(:firstName, :middleName, :lastName, :major, :school, :year, :phoneNumber, :email)";

    //The SQL query.
   $sql = "SELECT COUNT(*) AS num FROM `users` WHERE email = :email";
 
   //Prepare the SQL statement.
   $stmt = $db->prepare($sql);
 
   //Bind our email value to the :email parameter.
   $stmt->bindValue(':email', $email);
 
   //Execute the statement.
   $stmt->execute();
 
   //Fetch the row / result.
   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($row['num'] == 0);
   {
   $statement = $db->prepare($query);
   $statement->bindValue(':firstName', $firstName);
   $statement->bindValue(':middleName', $middleName);
   $statement->bindValue(':lastName', $lastName);
   $statement->bindValue(':major', $major);
   $statement->bindValue(':school', $school);
   $statement->bindValue(':year', $year);
   $statement->bindValue(':phoneNumber', $phoneNumber);
   $statement->bindValue(':email', $email);
   //$success = $statement->execute();     // if the statement is successfully executed, execute() returns true
   // false otherwise
   if($statement->execute())
      echo "Insert Sucessfull!";    
   else
      echo "Insert Failure"; 

   }
      

   $statement->closeCursor();
}


?>