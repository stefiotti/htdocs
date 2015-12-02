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
 <div>
<hr>
<?php
echo "<h3> REQUIREMENT # 1: <ul>
<li>Include navigation links on index.php to navigate to selfprocessor.php and validatecontrols.php
<li>Include two datalists at the top of the page. The first datalist contains days of the week and the second datalist contains months of the year</h3>";
echo '<a href="selfprocessor.php">selfprocessor.php</a><br>';
echo '<a href="validatecontrols.php">validatecontrols.php</a><br>';

?>
<label for="days">Input a day of the week:</label><br>

  <input list="daysOfTheWeek" name="daysOfTheWeek">
  <datalist id="daysOfTheWeek">
    <option value="Sunday">
    <option value="Monday">
    <option value="Tuesday">
    <option value="Wenesday">
    <option value="Thursday">
    <option value="Friday">
    <option value="Saturday">
  </datalist>


<br><br>
<label for="days">Input a month of the year:</label><br>

  <input list="monthsOfTheYear" name="monthsOfTheYear">
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

<br>
<br>
<hr>
<?php
echo "<h3> REQUIREMENT # 2: <br>
Enclose the two data lists in a form with<ol>

<li> action=“daymonth.php’
<li> method=“get”
<li> Submit button</h3>";
?>



<label for="days">Input a day of the week:</label><br>
<form action="daymonth.php" method="get">
  <input list="daysOfTheWeek" name="daysOfTheWeek">
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
<form action="daymonth.php" method="get">
  <input list="monthsOfTheYear" name="monthsOfTheYear">
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
  <input type="submit"><br><br>
</form>
<hr>
<?php
echo "<h3> REQUIREMENT # 3: <ul>
<li>Create a form processor file named daymonth.php that displays a welcome message
and the day and month that was selected on index.php. Include a function called
“test_input” to ensure text data received from the form is safe before displaying
the data. Include an HTML element of your choice to navigate back to index.php.
</h3>";
?>
<label for="days">Input a day of the week:</label><br>
<form action="daymonth.php" method="get">
  <input list="daysOfTheWeek" name="daysOfTheWeek">
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
<form action="daymonth.php" method="get">
  <input list="monthsOfTheYear" name="monthsOfTheYear">
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
  <input type="submit"><br><br>
</form>
<hr>
<h3> REQUIREMENT # 4: <br>
Create a second form with the following:<ul>
<li> action=”favorites.php”
<li> method=”post”
<li> Name textbox (required – display appropriate error message next to
the control)
<li> Favorite Movie textbox (required–display appropriate error
message next to the control)
<li> Favorite Food textbox (required–display appropriate error message
next to the control)
<li>  Four radio buttons for favorite season choices (make Summer the
default setting)
<li> Comments (optional)
<li> Submit button
</ul></h3>
<br>
<form action="favorites.php" method="POST">
<p><span class="error">* required field.</span></p>
Name:    <br><input type="text" name="name" value="<?php echo $name;?>"><span class="error">* </span><br><br>
What's your favorite movie?    <br><input type="text" name="movie" value="<?php echo $movie;?>"><span class="error">* </span><br><br>
What's your favorite food?    <br><input type="text" name="food" value="<?php echo $food;?>"><span class="error">* </span><br><br>

What's your favorite season?   <span class="error">* <?php echo $seasonErr;?></span><br><br>
 <input type="radio" name="season" <?php if (isset($season) && $season=="winter") echo "checked";?>  value="winter">Winter
 <input type="radio" name="season" <?php if (isset($season) && $season=="spring") echo "checked";?>  value="spring">Spring
  <input type="radio" name="season" <?php if (isset($season) && $season=="summer") echo "checked";?>  value="summer" checked>Summer
   <input type="radio" name="season" <?php if (isset($season) && $season=="fall") echo "checked";?>  value="fall">Fall
<br><br>
Comment:    <br><textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
  <input type="submit"><br><br>
</form>

<hr 
<h3> REQUIREMENT # 5: <ul>
<li>Create a form processor file named favorites.php that displays the content
of the HTML elements sent to it.
<li>Include a function called “test_input” to ensure text data received from the form is
safe before displaying the data.
<li>Include an HTML element of your choice to navigate back to index.php.</ul></h3>
<form action="favorites.php" method="post">

   
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
  <input type="submit"><br><br>
</form>


<hr>
<h3> REQUIREMENT # 6: <br>
Create a third form with the following:<ul>
<li>  action=”html.php”
<li> method=”post”
<li> Include 5 new HTML5 input type elements
<li> Apply 5 new HTML5 input attributes to the elements 
<li> Submitbutton</ul></h3>
<form action="html.php" method="POST">
First name:<br>
<input type="text" name="firstname" value="<?php echo $name;?>">
<br>
Last name:<br>
<input type="text" name="lastname" value="<?php echo $lastName;?>">
<br><br>
User name:<br>
<input type="text" name="username">
<br>
User password:<br>
<input type="password" name="psw"><br>
<input type="radio" name="sex" value="male" checked> Male
<br>
<input type="radio" name="sex" value="female"> Female<br>
<input type="submit" value="Submit">
</form>
<br>
<hr>
<h3> REQUIREMENT # 7: <ul>
<li>Create a form processor file named html.php that displays the content of
the HTML elements sent to it.
<li>Include an HTML element of your choice
to navigate back to index.php.</ul></h3>
<form action="html.php" method="post">
First name:<br>
<input type="text" name="name" value="">
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
<hr>
<h3> REQUIREMENT # 8: <ul>
Create a file named self processor.php:
<li> Combine the contents of the three forms above into one form
<li> action=make the form call the current page,that is, call itself. Be
sure to validate form data in this action.
<li> method=”post”
<li> Include code on the page to check whether the form was submitted
<li> Include code to process and display the data when submitted
<li> Include code in the form that retains the values in the controls after
submission (a.k.a sticky form)
<li> Include a function called “test_input” to ensure text data received
from the form is safe before displaying the data.
<br></ul></h3>



<hr>
<h3> REQUIREMENT # 9: <ul>
<li>Create a file named validate controls.php that is a self-processor
<li> Name textbox (required–only letters and spaces are allowed. display appropriate error message next to the control)
<li> Email(required–verify email format)
<li> Website (required – verify correct URL format)
<li> Three “Developer Type” radiobuttons (Front-End;S erver-Side;Full Stack). No default set. Ensure one button has been selected.
<li> action= make the form call the current page,that is,call itself. Be
sure to validate form data in this action.
<li> method=”post”
<li> Include code on the page to check whether the form was submitted
<li> Include code to process and display the data when submitted
<li> Include code in the form that retains the values in the controls after
submission (a.k.a sticky form)
<li> Include a function called “test_input” to ensure text data received
from the form is safe before displaying the data.
<br></ul></h3>



<hr>

</div>
                                
<script type="text/javascript" src="scripts/program-05.js"></script>

</div>
  </body>
  </html>
