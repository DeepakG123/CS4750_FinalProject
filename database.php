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
      echo "Insert Successfull!";    
   else
      echo "Insert Failure"; 

   }
   $statement->closeCursor();
}

function addPost($position, $interviewRounds, $feedback, $questions, $rating, $dates, $companyID, $userID)
{
   global $db;

   $query = "INSERT INTO post VALUES(:position, :interviewRounds, :feedback, :questions, :rating, :dates, :companyID, default, :userID)";
   
   $statement = $db->prepare($query);
   $statement->bindValue(':position', $position);
   $statement->bindValue(':interviewRounds', $interviewRounds);
   $statement->bindValue(':feedback', $feedback);
   $statement->bindValue(':questions', $questions);
   $statement->bindValue(':rating', $rating);
   $statement->bindValue(':dates', $dates);
   $statement->bindValue(':companyID', $companyID);
   $statement->bindValue(':userID', $userID);
   //$success = $statement->execute();     // if the statement is successfully executed, execute() returns true
   // false otherwise
   if($statement->execute())
      echo "Insert Successfull!";    
   else
      echo "Insert Failure"; 
 
   $statement->closeCursor();
}

function addCompany($name, $website, $industry)
{
   global $db;

   $query = "INSERT INTO company VALUES(:name, :website, default, :industry)";

     //The SQL query.
   $sql = "SELECT COUNT(*) AS num FROM `company` WHERE name = :name";

   //Prepare the SQL statement.
   $stmt = $db->prepare($sql);
 
   //Bind our email value to the :email parameter.
   $stmt->bindValue(':name', $name);
 
   //Execute the statement.
   $stmt->execute();
 
   //Fetch the row / result.
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   if($row['num'] == 0);
   {
      $statement = $db->prepare($query);
      $statement->bindValue(':name', $name);
      $statement->bindValue(':website', $website);
      $statement->bindValue(':industry', $industry);
      //$success = $statement->execute();     // if the statement is successfully executed, execute() returns true
      // false otherwise
      if($statement->execute())
         echo "Insert Successfull!";    
      else
         echo "Insert Failure"; 

   }

   $statement->closeCursor();
}


?>