<?php
$colorCreate =array("blue", "purple","lightgreen","gray","gray","yellow","mediumorchid","lightblue","pink","red","orange","darkblue","darkolivegreen","darkviolet","gold","hotpink","lemmonchiffon","indigo","lavender");
    $color=simplexml_load_file('divcolors.xml');
foreach($color->div as $div){
$output=  $div -> div . $div ->color;


    header("Content-type: text/css; charset: UTF-8");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

array_replace($colorCreate,$output);
}
    }
?>

html{
    background: url(pattern.png) repeat;
    font-family: "Museo Sans Rounded";
    color: rgb(252, 241, 252);
}
p{
color:deeppink;
}
.fran{
    float:right;

}

.font{
font-size: 12rem;
color: transparent;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
  border-radius: 150px;

}
.font:hover{
    color: white;
}


  #one {
  border-radius: 300px;
  background: <?php echo $colorCreate[0]; ?>;
  position: absolute;
  float: left;
  top: 550px;
  width: 300px;
  height: 300px;
  margin-left:  500px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#one:hover{
    background: coral;
    border-radius: 50%; 
}

#two {
  border-radius: 50px;
  background: <?php echo $colorCreate[1]; ?>;
  position: absolute;
  float: left;
  top: 550px;
  width: 20px;
  height: 70px;
margin-left:  650px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
.wrap2:hover .two{
    margin-left:  80%;
    background: MediumSpringGreen ;
   
    border-radius: 50%;
}
#two:hover{
  top: 150px;
    background: coral;
    border-radius: 50%; 
}

#three {
  border-radius: 10px;
  background: <?php echo $colorCreate[2]; ?>;
  position: absolute;
  float: left;
  top: 550px;
  width: 250px;
  height: 70px;
  margin-left:  300px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#four {
  border-radius: 50px;
  background: <?php echo $colorCreate[3]; ?>;
  position: absolute;
  float: left;
  top: 550px;
  width: 50px;
  height: 50px;
  margin-left:  370px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}

#five {
  border-radius: 50px;
  background: <?php echo $colorCreate[4]; ?>;
  position: absolute;
  float: left;
  top: 450px;
  width: 50px;
  height: 50px;
  margin-left:  300px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
}
#six {
  border-radius: 50px;
  background: <?php echo $colorCreate[5]; ?>;
  position: absolute;
  float: left;
  top: 450px;
  width: 50px;
  height: 50px;
  margin-left:  300px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
}
#seven {
  border-radius: 90px;
  background: <?php echo $colorCreate[6]; ?>;
  position: absolute;
  float: left;
  top: 550px;
  width: 90px;
  height: 90px;
margin-left:  550px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#eight {
  border-radius: 90px;
  background: <?php echo $colorCreate[7]; ?>;
  position: absolute;
  float: left;
  top: 550px;
  width: 90px;
  height: 90px;
margin-left:  750px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#nine {
  border-radius: 100px;
  background: <?php echo $colorCreate[8]; ?>;
  position: absolute;
  float: left;
  top: 620px;
  width: 150px;
  height: 90px;
margin-left:  390px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#ten {
  border-radius: 9px;
  background: <?php echo $colorCreate[9]; ?>;
  position: absolute;
  float: left;
  top: 500px;
  width: 100px;
  height: 90px;
margin-left:  650px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#eleven {
  border-radius: 9px;
  background:<?php echo $colorCreate[10]; ?>;
  position: absolute;
  float: left;
  top: 500px;
  width: 100px;
  height: 190px;
margin-left:  850px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#twelve {
  border-radius: 50px;
  background:<?php echo $colorCreate[11]; ?>;
  position: absolute;
  float: left;
  top: 700px;
  width: 50px;
  height: 50px;
margin-left:  300px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#thirteen {
  border-radius: 8px;
  background:<?php echo $colorCreate[12]; ?>;
  position: absolute;
  float: left;
  top: 750px;
  width: 50px;
  height: 50px;
margin-left:  550px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#fourteen {
  border-radius: 0px;
  background:<?php echo $colorCreate[13]; ?>;
  position: absolute;
  float: left;
  top: 860px;
  width: 150px;
  height: 50px;
margin-left:  500px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#fifteen {
  border-radius: 0px;
  background:<?php echo $colorCreate[14]; ?>;
  position: absolute;
  float: left;
  top: 850px;
  width: 50px;
  height: 50px;
margin-left:  580px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#sixteen {
  border-radius: 14px;
  background:<?php echo $colorCreate[15]; ?>;
  position: absolute;
  float: left;
  top: 780px;
  width: 80px;
  height: 80px;
margin-left:  620px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#seventeen {
  border-radius: 50px;
  background:<?php echo $colorCreate[16]; ?>;
  position: absolute;
  float: left;
  top: 790px;
  width: 50px;
  height: 150px;
margin-left:  700px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#eighteen {
  border-radius: 50px;
  background:<?php echo $colorCreate[17]; ?>;
  position: absolute;
  float: left;
  top: 775px;
  width: 50px;
  height: 50px;
margin-left:  850px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#nineteen {
  border-radius: 50px;
  background:<?php echo $colorCreate[18]; ?>;
  position: absolute;
  float: left;
  top: 850px;
  width: 150px;
  height: 50px;
margin-left:  850px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}
#twenty {
  border-radius: 100px;
  background:<?php echo $colorCreate[19]; ?>;
  position: absolute;
  float: left;
  top: 900px;
  width: 150px;
  height: 150px;
margin-left:  400px;
  margin-top: 5px;
  z-index: 4;
transition-duration: 1s;
transition-timing-function: cubic-bezier (.5,-5,.3,1.3), ease;
transition-delay: .2s;
    
}



.wrap{
    height: 300px;
    opacity: 0.788;
    left: -340px;
    top: -1785px;
    z-index: 900;
    

}

.wrap:hover .Ellipse_3{
    margin-left:  95%;
    background: coral;
   
    border-radius: 50%;
}

.req2{
  top: 1100px;
margin-left:  400px;
  position: absolute;
  background: lightgray;
  border-radius: 10px;  
}
.req3{
  top: 1400px;
margin-left:  400px;
  position: absolute;
  background: darkgray;
}
