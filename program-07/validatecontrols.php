<!DOCTYPE html >
<html lang="en" >
<head>

    <title>
     Program-07
    </title>    
    <meta charset="utf-8" />


  <!-- This is where your link tag goes when linking to an external style sheet. -->
<link href="program-07.css" rel="stylesheet" type="text/css" />


<!--This is the format you will use when entering JavaScript -->    
<script type="text/javascript" src="scripts/program-07.js">
/* <![CDATA[ */   
 // your JavaScript instructions will go here
 
 /* ]]> */

</script>    
    <style>
.error {color: #FF0000;}
</style>
</head>

  <body> 


<?php

$name = $email = $website = $ethnicity = "";
$nameErr = $emailErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }    if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   } if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     }
   }if (empty($_POST["ethnicity"])) {
     $ethnicity = "";
   } else {
     $ethnicity = test_input($_POST["ethnicity"]);
}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Ethnicity:
   <input type="radio" name="ethnicity" <?php if (isset($ethnicity) && $ethnicity=="hispanic") echo "checked";?>  value="Hispanic">Hispanic
   <input type="radio" name="ethnicity" <?php if (isset($ethnicity) && $ethnicity=="caucasian") echo "checked";?>  value="Caucasian">Caucasian
   <input type="radio" name="ethnicity" <?php if (isset($ethnicity) && $ethnicity=="african american") echo "checked";?>  value="African American">African American

   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";  
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $ethnicity;
?>

</body>
</html>