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

$name = $food = $movie = $season = $comment ="";
$nameErr = $foodErr = $movieErr = $seasonErr = "";
$fname = $lastName = $userName = $psw = $sex = "";
$day = $month = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $day = test_input($_POST["daysOfTheWeek"]);
   $month = test_input($_POST["monthsOfTheYear"]);

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["daysOfTheWeek"])){
        $day = "";
    }else{test_input($_POST["daysOfTheWeek"]);
    }
        if(empty($_POST["monthsOfTheYear"])){
        $month = "";
    }else{test_input($_POST["monthsOfTheYear"]);
    }
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


?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label for="days">Input a day of the week:</label><br>

  <input list="daysOfTheWeek" name="daysOfTheWeek" value="<?php echo $day ?>">
  <datalist id="daysOfTheWeek">
    <option value="Monday">
    <option value="Tuesday">
    <option value="Wenesday">
    <option value="Thursday">
    <option value="Friday">
    <option value="Saturday">
    <option value="Sunday">
  </datalist>

<br>
<label for="days">Input a month of the year:</label><br>

  <input list="monthsOfTheYear" name="monthsOfTheYear"value="<?php echo $month ?>">
  <datalist id="monthsOfTheYear">
    <option value="January">
    <option value="Febuary">
    <option value="March">
    <option value="April">
    <option value="May">
    <option value="June">
    <option value="July">
    <option value="August">
    <option value="September">
    <option value="October">
    <option value="November">
    <option value="December">
  </datalist>
  <br><br>


<p><span class="error">* required field.</span></p>
Name:    <br><input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span><br><br>
What's your favorite movie?    <br><input type="text" name="movie" value="<?php echo $movie;?>"><span class="error">* <?php echo $movieErr;?></span><br><br>
What's your favorite food?    <br><input type="text" name="food" value="<?php echo $food;?>"><span class="error">* <?php echo $foodErr;?></span><br><br>

What's your favorite season?   <span class="error">* <?php echo $seasonErr;?></span><br><br>
 <input type="radio" name="season" <?php if (isset($season) && $season=="winter") echo "checked";?>  value="winter">Winter
 <input type="radio" name="season" <?php if (isset($season) && $season=="spring") echo "checked";?>  value="spring">Spring
  <input type="radio" name="season" <?php if (isset($season) && $season=="summer") echo "checked";?>  value="summer" checked>Summer
   <input type="radio" name="season" <?php if (isset($season) && $season=="fall") echo "checked";?>  value="fall">Fall
<br><br>
Comment:    <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
<br><br>



First name:<br>
<input type="text" name="fname" value="<?php echo $fName;?>">
<br>
Last name:<br>
<input type="text" name="lastname" value="<?php echo $lastName;?>">
<br><br>
User name:<br>
<input type="text" name="username" value="<?php echo $userName;?>">
<br>
User password:<br>
<input type="password" name="psw" value="<?php echo $psw;?>"><br>
<input type="radio" name="sex"<?php if (isset($sex) && $sex=="male") echo "checked";?> value="male" checked> Male
<br>
<input type="radio" name="sex" <?php if (isset($sex) && $sex=="female") echo "checked";?>  value="female"> Female<br>
<input type="submit" value="Submit">
</form>

<?php

echo "day selected is:" .  $day;
echo "<br>";
echo "month selected is:". $month;
echo  "<h2>Your First Name:</h2>".$fname;
echo "<br>";
echo  "<h2>Your Last Name:</h2>".$lastName;
echo "<br>";
echo "<h2>Your Username:</h2>".$userName;
echo "<br>";
echo "<h2>Your Password is:</h2>".$psw;
echo "<br>";
echo "<h2>Your Sex:</h2>".$sex ;
echo "<br>";
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
</body>
  </html>
