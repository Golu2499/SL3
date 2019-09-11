
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

form{
	border-style:double;
	border-color: blue;
	width: 60%;
	margin: 40px;
	 }

input{
	background: #f1f1f1;
	display: inline-block;
	padding: 15px;
	outline: none;
	border: none;
	border-radius: 4px;
}

input:focus {
  background-color: #ddd;
  outline: none;
}

</style>
</head>
<body background="https://www.freepik.com/free-vector/elegant-white-background-with-shiny-lines_4077186.htm#page=1&query=white%20background&position=2">  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = "";

function checkinput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is empty";
  } else {
    $name = checkinput($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Name should have alphabets only";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is empty";
  } else {
    $email = checkinput($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email";
    }
  }
  

  if (empty($_POST["website"])) {
    $websiteErr="URL is empty";
  } else {
    $website = checkinput($_POST["website"]);
   
    $headers = @get_headers($website); 

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "URL is not valid";
    }  
      
  
    // Use condition to check the existence of URL 
    if($headers && strpos( $headers[0], '200')) { 
    $status = "URL Exist";
    
    } 
    else { 
    $status = "URL Doesn't Exist"; 
    } 
  
// Display result 
    echo($status); 
  }
	
}


?>
<center>
<h2>LogIn Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<br>
  <b>Name</b>: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <b>E-mail</b>: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <b>Website</b>: <input type="text" name="website">
  <span class="error">* <?php echo $websiteErr;?></span>
  <br><br>
	
  <input type="submit" name="submit" value="Submit">  
<br>
 <br>

</form>
 
</center>
<br>

</body>
</html>
