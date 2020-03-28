<?php
require('connectdb.php');
require('database.php');
?>

<?php
if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['major'])){
         addUser($_POST[firstName], $_POST[middleName], $_POST[lastName], $_POST[major], $_POST[school], $_POST[year], $_POST[phoneNumber], $_POST[email]);
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
<h1>Users</h1>
<form action="./simpleform.php" method="post"> 
  <div class="form-group">
    First Name 
    <input type="text" class="form-control" firstName="firstName" required />   
    Middle Name 
    <input type="text" class="form-control" lastName="middleName" required /> 
    Last Name 
    <input type="text" class="form-control" lastName="lastName" required />  
    Major
    <input type="text" class="form-control" major="major" required />  
    School
    <input type="text" class="form-control" school="school" required />  
    Year
    <input type="text" class="form-control" year="year" required />  
    Phone Number
    <input type="text" class="form-control" phoneNumber="phoneNumber" required />  
    Email
    <input type="text" class="form-control" email="email" required />     
  </div>  
     
  <input type="submit" value="Save info" class="btn btn-dark" />  
  
</form>  

    
</div>    
</body>