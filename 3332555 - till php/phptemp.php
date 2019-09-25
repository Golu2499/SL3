<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register </title>
  </head>

      <h1>

        Why do we need financial literacy ?
     </h1>
     <br>
     <iframe width="410" height="315" src="https://www.youtube.com/embed/pWU3DYvnP0s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     <iframe width="410" height="315" src="https://www.youtube.com/embed/ixAWaMlUInw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     <iframe width="410" height="315" src="https://www.youtube.com/embed/3ez10ADR_gM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <br>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: grey
}
h1   {color: black;
      font-family: "Helvetica";
      padding: 200px 250px 40px 300px;
      font-size : 50px;
      text-align: center;}
p    {color: red;}

    

{
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 25px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #4CAF50;
  color: grey;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.95;
}

.registerbtn:hover {
  opacity: 0.5;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<body style="background-image:url('file:///home/pict/Desktop/3332555/8DDO.gif');">


   <?php
  $email = "john.doe@example.com";

  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("$email is a valid email address");
  }     else {
      echo("$email is not a valid email address");
  }
  ?> 






















     <p>Comments:  <textarea cols="55" name="Comment">  </textarea></p> 
     <br>
    <p>By creating an account you agree to our <a href="e.html">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn"><a href = "c.html">Register</a></button>
</form>
</div>
</body>

    

</html>
