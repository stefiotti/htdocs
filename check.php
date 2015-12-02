
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

<?php
$servername = "localhost";
$username = "itse230200001007";

if($_POST['select'] and $_SERVER['REQUEST_METHOD'] == "POST"){
    select();
}
if($_POST['insert'] and $_SERVER['REQUEST_METHOD'] == "POST"){
    insert();
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=itse230200001007", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $sql="CREATE TABLE teams (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
teamname VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
bestplayer VARCHAR(30) NOT NULL,
website VARCHAR(50),
reg_date TIMESTAMP
)";
$conn->exec($sql);
 
?>
  </body>

  </html>
