<!DOCTYPE HTML> 
<html>
<head>

    <title>
     Program-07
    </title>    
    <meta charset="utf-8" />


  <!-- This is where your link tag goes when linking to an external style sheet. -->
<link href="program-07.css" rel="stylesheet" type="text/css" />   
    
</script>    
    <style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php

$name = $food = $movie = $season = $comment ="";
$nameErr = $foodErr = $movieErr = $seasonErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["food"])) {
     $foodErr = "Favorite Food is required";
   } else {
     $food = test_input($_POST["food"]);
   }
     
   if (empty($_POST["movie"])) {
     $movieErr = "Favorite Movie is Required";
   }else {
     $movie = test_input($_POST["movie"]);
   }
   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["season"])) {
     $seasonErr = "season is required";
   } else {
     $season = test_input($_POST["season"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

echo "<h2>Your Input:</h2>";
echo "<h2>Your Name:</h2>".$name.$nameErr;
echo "<br>";
echo "<h2>Your Favorite Food:</h2>".$food.$foodErr;
echo "<br>";
echo "<h2>Your Favorite Movie:</h2>".$movie.$movieErr;
echo "<br>";
echo "<h2>Your Favorite Season:</h2>".$season.$seasonErr;
echo "<br>";
echo "<h2>Comments:</h2>".$comment;

?>
<br>

<a href="/index.php">
<img src="back.jpg" alt="back, you fool!" width="382" height="288" border="0">
</body>
</html>