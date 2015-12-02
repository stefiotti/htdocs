<!DOCTYPE html>
<html lang="en">
    <head>
        <title>John Haddon: Program-05</title>
        <link rel="stylesheet" type="text/css" href="css/program-05.css" />
        <meta charset="utf-8" />
    </head>
<body>
<div id="main">
<?php
#1
echo "<h1>#1 Welcome to PHP!</h1>";

$name = "Marcus";

echo "<h2>", $name, "</h2>";


$x = pi() * pow(33,2);
echo "<h3>", $x, "</h3>";
?>
    
<hr>
    
<?php
#2
function local() {
    $localA = "string";
    $localB = "variables";
    $localC = 2;
    $localD = 4;
    echo "<h2>#2 Scope</h2>", "<p>This string was created using ", $localC, " ", $localA, " variables and 2 numeric ", $localB, ". All  ", $localD, " variables are local to the function that created this string, and cannot be accessed outside of that function!</p>";
};

local();


$globalA = 2;
$globalB = 4;
$globalC = "global";
$globalD = "function";

function glbl() {
    global $globalA, $globalB, $globalC, $globalD;
    
    echo "<p>This string was also created using ", $globalA, " numeric variables and 2 string variables. But all ", $globalB, " variables were declared outside of the ", $globalD, " that created this string, and are ", $globalC, " to it!</p>";
}

glbl();

function strs() {
    static $stars = "<br>";
    $stars .= "*";
    echo $stars;   
}

function dollar() {
    static $dollar = "<br>";
    $dollar .= "$$$$$";
    echo $dollar;
}

echo "The two shapes below were created using a static variable that were local to the functions that created them, but whos values persisted in between each time the functions were called!";
echo "<p>";
for ($i = 0; $i <= 11; $i++) {
    strs();
}

for ($i = 0; $i <= 8; $i++) {
    dollar();
}
echo"</p>";
?>

<hr>

<?php
#3
class DaysOfWeek {
    
        public $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    
    
    public function getDays() {
        $string = "";
        
        for ($i = 0; $i < count($this->days) -1; $i++) {
            $string .= $this->days[$i];
            $string .= ", ";
        }
        $string .= $this->days[6];
        return $string;
    }
}

$thisWeek = new DaysOfWeek();

echo "<h2>#3 Defining an object class with attributes and methods</h2>";

echo $thisWeek->getDays();
?>
    
<hr>

<?php
#4
$string = "abcdefghij JavaScript and PHP are so much fun! klmnopqertuvwxyx";

echo "<h2>#4 String methods</h2>";

echo "Our string: '", $string, "'<br>";

echo "Length of the string: ", strlen($string), "<br>";
echo "Number of words in the string: ", str_word_count($string), "<br>";
echo "Is the word 'PHP' in the string?:&nbsp";

if (strpos($string, "PHP")) {
    echo "Yes!";
} else {
    echo "No frown emoticon";
}

echo "<br> Our string after replacing 'so much fun' with 'wonderful': ", str_replace("so much fun", "wonderful", $string);
?>

<hr>

<?php
#5
echo "<h2>#5 More string methods</h2>";

echo "Splitting a string into an array:<br>";

echo var_dump(str_split($string, 10));
?>

<hr>

<?php
#6
echo "<h2>#6 Converting an array into a string</h2>The 'days' array from our DaysOfWeek object joined into a string:<br>";
echo join(" ",$thisWeek->days);
?>

<hr>

<?php
#7
echo "<h2>#7 Formatting strings</h2>";
printf("This string was formatted using %u variables used by the %s in requirement 2!",$globalA,$globalD);
?>
    
<hr>

<?php
#8
echo "<h2>#8 Identifying characters in a string</h2>";


echo "All unique characters used in the string from requirment 4: ", count_chars($string,3), "<br>";
echo "All unique characters NOT used in that string: ", count_chars($string,4), "<br>";
echo "<p>An array with all ASCII character codes of all unique characters used in the string, and the number of occurences for each:<br> ", var_dump(count_chars($string,1)), "<p>";
?>

<hr>

<?php
#9

$weird = "<&¢£¥€©>";
echo "<h2>#9 </h2>";
echo htmlentities($weird, ENT_SUBSTITUTE);
?>
    
<hr>

<?php
#10
echo "<h2>#10 Shuffling a String</h2>";
$simple = 'JavaScript and PHP are so much fun!';
echo "Here we have a string: ", $simple, "<br>";
echo "And here we have that string shuffled randomly!: ", str_shuffle($simple);
?>

<hr>

<?php
#11
echo "<h2>#11 Capitalizing each word in a string</h2>";
echo ucwords($simple);
?>
    
<hr>

<?php
#12
echo "<h2>#12 Exploding a string</h2>";

$simpleArr = explode(" ", $simple);

for ($i = 0; $i < count($simpleArr); $i++) {
    echo  $simpleArr[$i], "<br>";
}


?>
</div>

</body>
</html>