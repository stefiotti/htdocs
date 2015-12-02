<!DOCTYPE html >
<html lang="en" >
<head>
    <title>
     counterpoint
    </title>    
    <meta charset="utf-8" />
<link rel='stylesheet' type='text/css' href='counterpoint.css' />
<link rel="stylesheet" type="text/css" href="style.css" />

  <!-- This is where your link tag goes when linking to an external style sheet. -->
  <script data-main="main.js" src="require.js"></script>
<script>
    function showKEY(str) {
  if (str=="") {
    document.getElementById("txtHint0").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint0").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getKEY.php?q="+str,true);
  xmlhttp.send();
}
window.onload = function() {
	document.getElementById("piano").style.display = "block";
	document.getElementById("loader").style.display = "none";
};
    </script> 
<header>



</header>

</head>

 <body class="center"></script> 
<header>

<h1>COUNTERPOINT</h1>
<form>
Select a key:
<select name="scale" onchange="showKEY(this.value)">
<option value="">Select a key:</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    <option value="F">F</option>
    <option value="G">G</option>
    <option value="A">A</option>
    <option value="B">B</option>

</select>
</form>
<div id="txtHint0"><b>Key intervals will be listed here...</b></div>

</header>

</head>

 <body class="center">
    <div id="loader">
	<img src="preloader.gif">
</div>
<div id="piano">
	<h1 id="brand"></h1>
	<div id="keyboard">
		<div id="C3" class="key">
			<div id="C3s" class="blackKey">&nbsp;</div>
		</div>
		<div id="D3" class="key">
			<div id="D3s" class="blackKey">&nbsp;</div>
		</div>
		<div id="E3" class="key">
			<div class="invisible">&nbsp;</div>
		</div>
		<div id="F3" class="key">
			<div id="F3s" class="blackKey">&nbsp;</div>
		</div>
		<div id="G3" class="key">
			<div id="G3s" class="blackKey">&nbsp;</div>
		</div>
		<div id="A3" class="key">
			<div id="A3s" class="blackKey">&nbsp;</div>
		</div>
		<div id="B3" class="key">
			<div class="invisible">&nbsp;</div>
		</div>
		<div id="C4" class="key">
			<div id="C4s" class="blackKey">&nbsp;</div>
		</div>
		<div id="D4" class="key">
			<div id="D4s" class="blackKey">&nbsp;</div>
		</div>
		<div id="E4" class="key">
			<div class="invisible">&nbsp;</div>
		</div>
		<div id="F4" class="key">
			<div id="F4s" class="blackKey">&nbsp;</div>
		</div>
		<div id="G4" class="key">
			<div id="G4s" class="blackKey">&nbsp;</div>
		</div>
		<div id="A4" class="key">
			<div id="A4s" class="blackKey">&nbsp;</div>
		</div>
		<div id="B4" class="key">
			<div class="invisible">&nbsp;</div>
		</div>
		<div id="C5" class="key">
			<div class="invisible">&nbsp;</div>
		</div>
	</div>
</div>

<p class="hint">Use your querty keyboard to interact with the virtual piano</p>


<?php

?>

  </body>

  </html>
