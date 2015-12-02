
function colorSelect() {
document.getElementById("demo").innerHTML = 
"Page location is: " + window.location.href;
}

function goBack() {
    window.history.back()
}
function goForward() {
    window.history.forward()
}

function javaEnabled() {
    document.getElementById("java").innerHTML =
    "Java enabled is " + navigator.javaEnabled();
}

 
function changeColors(xml) {
var xmlDoc = xml.responseXML;
var colorColor = xmlDoc.getElementsByTagName("div");
for (var i = 0; i < colorColor.length; i++){
    var current = colorColor[i].getAttribute('name');
    var theDiv = document.getElementById(current);
    theDiv.style.backgroundColor = colorColor[i].childNodes[0].nextSibling.innerHTML;
}
}

function setTheColors(){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        changeColors(xhttp);
    }
};
xhttp.open("GET", "divcolors.xml", true);
xhttp.send();
}
function crazyColor() {
   
     var x = document.getElementsByClassName("div");
     for (i=0; i<x.length;i++){
    x[i].style.backgroundColor = randomColors();
}

}
function randomColors() {
     
     return '#' + Math.floor(Math.random() * 16777215).toString(16);
}

function timeLord(){
    var timer=document.getElementById("time").value;
    
    if (timer.length ==0) {
        alert("please enter a value");
    }else{
        var numericExpression = /^[0-9]+$/;
	if(!timer.match(numericExpression)){
	alert("Please enter a number")
    }else{
         myVar = setInterval(function(){ crazyColor() }, timer);
    }
}
}
function stopColor() {
  clearInterval(myVar);
}

function startStop(){
   currentvalue = document.getElementById('onoff').value;
  if(currentvalue == "Off"){
    document.getElementById("onoff").value="On";
    stopColor();
  }else{
    document.getElementById("onoff").value="Off";
    timeLord();
  }
    
}

function howManyPixels() {
    var x = "Total Height: " + screen.height + "px";
    document.getElementById("pixel").innerHTML = x;
}
function width() {
    var x = "Total Width: " + screen.width + "px";
    document.getElementById("pixelw").innerHTML = x;
}
function newDoc() {
    window.location.assign("http://www.codeandtheory.com/")
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
    document.getElementById("cookiestupid").innerHTML="Cookie Created";
    
}
function deleteCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
    document.getElementById("cookiestupid").innerHTML="Cookie Deleted";
    
}
