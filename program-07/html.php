<!DOCTYPE HTML> 
<html>
<head>

    <title>
     Program-07
    </title>    
    <meta charset="utf-8" />


  <!-- This is where your link tag goes when linking to an external style sheet. -->
<link href="program-07.css" rel="stylesheet" type="text/css" />   
    
</head>
<body>

<?php
// define variables and set to empty values
$fname = $lastName = $userName = $psw = $sex = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["fname"])) {
     $fname = "";
   } else {
     $fname = test_input($_POST["fname"]);
   }
   if (empty($_POST["lastname"])) {
     $lastName= "";
   } else {
     $lastName = test_input($_POST["lastname"]); 
}
if (empty($_POST["username"])) {
     $userName = "";
   } else {
     $userName = test_input($_POST["username"]);
   }
   if (empty($_POST["psw"])) {
     $psw = "";
   } else {
     $psw = test_input($_POST["psw"]);
   }
   if (empty($_POST["sex"])) {
     $sex = "";
   } else {
     $sex = test_input($_POST["sex"]);
   }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;

}
echo  $fname;
echo "<br>";
echo  $lastName;
echo "<br>";
echo $userName;
echo "<br>";
echo $psw;
echo "<br>";
echo $sex ;
echo "<br>";
 ?>
<br>


<a href="/index.php">
<img src="back.jpg" alt="back, you fool!" width="382" height="288" border="0">
</body>
</html>