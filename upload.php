<?php

if($_FILES){

 //Checking if file is selected or not

 if($_FILES['file']['name'] != "") {

 
        //Checking if the file is plain text or not

 if(isset($_FILES) && $_FILES['file']['type'] != 'text/plain') {

 echo "<span>File could not be accepted ! Please upload any '*.txt' file.</span>";

 exit();
  } 
  echo "<center><span id='Content'>Contents of ".$_FILES['file']['name']." File</span></center>";
 
 //Getting and storing the temporary file name of the uploaded file
 $fileName = $_FILES['file']['tmp_name'];
 
 //Throw an error message if the file could not be open
 $file = fopen($fileName,"r") or exit("Unable to open file!");
  
 // Reading a .txt file line by line
 while(!feof($file)) {
 echo fgets($file). "";
 }
  
 //Reading a .txt file character by character
 while(!feof($file)) {
 echo fgetc($file);
 }
 fclose($file);
 }

 else {
 if(isset($_FILES) && $_FILES['file']['type'] == '')
 echo "<span>Please Choose a file by click on 'Browse' or 'Choose File' button.</span>";
 }
}
?>
