<!DOCTYPE html >
<html lang="en" >
<head>

    <title>
     Program-06
    </title>    
    <meta charset="utf-8" />


  <!-- This is where your link tag goes when linking to an external style sheet. -->
<link href="program-06.css" rel="stylesheet" type="text/css" />
</head>
<?php
 
  $city = $_POST["city"];
    switch($city)
    {
      case "Austin":
      echo "Texas";
      break;
      case "Sacremento":
      echo  "California"; break;
      case "Albany":
      echo 'New York'; break;
      case "Juneau":
      echo "Alaska"; break;
      case "Columbus":
      echo "ohio"; break;
      case "Santa Fe":
      echo"New Mexico"; break;
      case "Little Rock":
      echo "Arkansas"; break;
      case "Raleigh":
      echo "North Carolina"; break;
      case "Montpelier":
      echo "Vermont"; break;
      case "Augusta":
      echo "Maine"; break;
      default: echo"Please Pick a City"; break;
    }
    
     
    
    exit();
  


?>
  </html>