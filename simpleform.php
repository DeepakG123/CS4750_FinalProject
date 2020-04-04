<?php
require('connectdb.php');
require('database.php');
?>

<?php
//Add User 
if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['major'])){
         addUser($_POST['firstName'], $_POST['middleName'], $_POST['lastName'], $_POST['major'], $_POST['school'], $_POST['year'], $_POST['phoneNumber'], $_POST['email']);
  }
//Add Company and then Add Post 
if (!empty($_POST['userID']) && !empty($_POST['companyName']) && !empty($_POST['position'])){
        addCompany($_POST['companyName'], $_POST['industry'], $_POST['website']);
        $result = $db->query("SELECT companyID FROM `company` WHERE name = '".$_POST['companyName']."' ")->fetch(); 
        addPost($_POST['position'], $_POST['interviewRounds'], $_POST['feedback'], $_POST['questions'], $_POST['rating'], $_POST['dates'], $result[0], $_POST['userID']);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="your name">
  <meta name="description" content="include some description about your page">      
  <title>Bootstrap example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container">
<h1>Add Interview </h1>
<form action="./simpleform.php" method="post"> 
  <h2>Add User</h2>
  <div class="form-group">
    First Name 
    <input type="text" class="form-control" name="firstName" required />   
    Middle Name 
    <input type="text" class="form-control" name="middleName"/> 
    Last Name 
    <input type="text" class="form-control" name="lastName" required />  
    Major
    <input type="text" class="form-control" name="major" required />  
    School
    <input type="text" class="form-control" name="school" required />  
    Year
    <input type="text" class="form-control" name="year" required />  
    Phone Number
    <input type="text" class="form-control" name="phoneNumber" required />  
    Email
    <input type="text" class="form-control" name="email" required />     
  </div>  
     
  <input type="submit" value="Save info" class="btn btn-dark" />  
  
</form>  

<form action="./simpleform.php" method="post"> 
  <h2>Add Post</h2>
  <div class="form-group">
    User ID 
    <input type="text" class="form-control" name="userID" required />  
    Company
    <input type="text" class="form-control" name="companyName" required />   
    Industry
    <input type="text" class="form-control" name="industry" required /> 
    Company Website
    <input type="text" class="form-control" name="website" required />  
    Position
    <input type="text" class="form-control" name="position" required />  
    Interview Date 
    <input type="text" class="form-control" name="dates" required />  
    Interview Rounds 
    <input type="text" class="form-control" name="interviewRounds" required />  
    Questions
    <input type="text" class="form-control" name="questions" required />  
    Feedback
    <input type="text" class="form-control" name="feedback" required />    
    Rating
    <input type="text" class="form-control" name="rating" required />     
  </div>  
     
  <input type="submit" value="Save info" class="btn btn-dark" />  
  
</form> 

    
</div>    
</body>