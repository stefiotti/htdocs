
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
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 $conn = null;
  echo " closed";
?>
  </body>

  </html>