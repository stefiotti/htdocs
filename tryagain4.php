
<!DOCTYPE html >
<html lang="en" >
<head>

    <title>
     Program-09
    </title>    
    <meta charset="utf-8" />

</head>
  <!-- This is where your link tag goes when linking to an external style sheet. -->
<link href="program-09.css" rel="stylesheet" type="text/css" />


<!--This is the format you will use when entering JavaScript -->    
<script type="text/javascript">
/* <![CDATA[ */   

 /* ]]> */

</script>    



<body>

    
<?php
$servername = "localhost";
$username = "itse230200001007";
$teamname= $city= $bestplayer= $website= $reg_date="";

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     if (empty($_POST["reg_date"])) {
     $reg_date = "Please post the year your team was created"; 
   }else {
     $reg_date = test_input($_POST["reg_date"]);}
    if (empty($_POST["bestplayer"])) {
     $bestplayer = "";
   }else {
     $bestplayer = test_input($_POST["bestplayer"]);}
    if (empty($_POST["city"])) {
     $city = "";
   }else {
     $city = test_input($_POST["city"]);}
    if (empty($_POST["teamname"])) {
     $teamname = "";
   }else {
     $teamname = test_input($_POST["teamname"]);}
    if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);}
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     }

     }


try {
    $conn = new PDO("mysql:host=$servername;dbname=itse230200001007", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO teams ( teamname, city, bestplayer, website, reg_date) 
    VALUES (:teamname, :city, :bestplayer, :website, :reg_date)");
   
    $stmt->bindParam(':teamname', $teamname);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':bestplayer', $bestplayer);
    $stmt->bindParam(':website', $website);
    $stmt->bindParam(':reg_date', $reg_date);

    // insert a row

    $stmt->execute();

echo "New records created successfully";

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?>

  </body>

  </html>
