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
Welcome, CODER NERD!<br>


<?php
// define variables and set to empty values
$day = $month = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   $day = test_input($_GET["daysOfTheWeek"]);
   $month = test_input($_GET["monthsOfTheYear"]);

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;

}
echo "day selected is:" .  $month;
echo "<br>";
echo "month selected is:". $day;

 ?>
<br>



<a href="/index.php">
<img src="back.jpg" alt="back, you fool!" width="382" height="288" border="0">
</body>
</html>