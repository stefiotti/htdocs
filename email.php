<!DOCTYPE html >
<html lang="en" >
<head>

    <title>
     Program-08
    </title>    
    <meta charset="utf-8" />


  <!-- This is where your link tag goes when linking to an external style sheet. -->
<link href="program-08.css" rel="stylesheet" type="text/css" />


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


 $emailErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

</form>

<?php
echo "<h2>Your Input:</h2>";  

echo $email;

?>

</body>
</html>