<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Demo CGPA calculator</title>
<meta name="generator" content="Bluefish 2.2.7" >
<meta name="author " content="Ajeh Emeke" >
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<link href="" rel="stylesheet" type="text/css" />
<script src="" ></script>
<style>
/* reset */ *{margin: 0; padding: 0; list-style: none; text-decoration: none;}
#header{
  width: 100%;
  min-width: 320px;
  background-color: greenyellow;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 0 0 5px 3px grey;
}
#header span{
  position: absolute;
  bottom: 5px;
  right: 5px;
  clear: both;
}
#header h1{
  color: #FFC;
  max-width: 700px;
  float: left;
  text-shadow: 2px 2px grey;
  padding: 20px;
  text-align: center;
}
#cont{
  min-width: 300px;
  width: 100%;
  min-width: 320px;
  margin:0 auto;
  margin-top: 100px;
  clear: both;
}
  fieldset{
  width: 100%;
  max-width: 400px;
  margin-top: 20px;
  padding: 5px 0;
  background-color: #FFC;
  transition: all .7sec linear;
  }
  fieldset:last-child{margin-bottom: 20px;}
  form label{color: brown; width: 100%;margin-left: 3%; float: left; clear: both;}
  form #radiobtn label{color: blue; width: 30%;margin-left: 3%; clear: none;}
form{
  background-color: greenyellow;
  width:92%;
  max-width: 400px;
  border-radius: 1px;
  border-color: yellow;
  padding: 10px 2%;
  color: purple;
  margin: 20px auto;
  box-shadow: 0 0 5px 3px grey;
}
form input[type= "text"], form input[type= "checkbox"]{
  width: 90%;
  float: none;
  padding: 4px 2%;
  margin: 5px auto 0 auto;
  color: blue;
  background-color: white;
}
form input[type= "submit"], [type= "reset"]{
  background-color: black;
  color: white;
  padding: 8px;
  font-size: 120%;
  margin: 10px;
  border: 3px solid transparent;
  border-radius: 10px;
}
form input[type= "submit"]:hover, [type= "reset"]:hover{
  background-color: white;
  color: black;
  border: 3px solid black;
  border-radius: 10px;
}
textarea{
  width: 90%;
  height: 150px;
  padding:2%;
  color: blue;
  max-width: 90%;
}
@media screen and (max-width: 550px){
#cont{margin-top: 150px;}
}
@media screen and (max-width: 400px){
#cont{margin-top: 170px;}
}
</style>
</head>
<body>

<div id="header"><h1>CGPA CALCULATOR (javaScript)</h1> <span>Designed by: <a href="http://facebook.com/godofbrowser">Ajeh Emeke</a></span></div>

<div id="cont">






<form method="post" action="" onSubmit="return formsubmit();" id="courseform">
<fieldset id="radiobtn">
<label>CGPA TYPE:</label> 
<label><input type="radio" name="action" value="update" /> 4 POINT</label>  
<label><input type="radio" name="action" value="remove" checked="checked"/>5 POINT</label></fieldset> 

<fieldset><label>How many courses did you offer? (max 5)<input type="text" name="box" placeholder="Enter a number of courses" onkeyup="addbox(this.value)" /></label></fieldset>

<legend id="boxes">
<fieldset>
<label>COURSE CODE:<input type="text" name="code1" id="code1" placeholder="eg: EBA101" /></label>
<label>UNIT:<input type="text" name="unit1" id="unit1" value="" /></label>
<label>SCORE (max 100):<input type="text" name="score1" id="score1" value="" /></label>
</fieldset>
</legend>

<fieldset>
<input type="reset" value="CLEAR" />
<input type="submit" name="submitquery" value="PROCEED" />
</fieldset>

<input type="hidden" name="errors" value="" />
</form>











</div>
<script>
function formsubmit(){
  var x;
  x=confirm("Calculate CGPA?");
  if (x) {
    calcgpa();
  }
return false;
}
function addbox(x) {
      //var event = document.event.onkeyPress;
      //var key = event.keyCode || event.which;   
        //alert(key);
      if (isNaN(x) && x.length > 0) { alert("Number of courses must be a number"); return}      
      if (x.length > 0 && x!=0) {
      var boxes = document.getElementById("boxes");
      boxes.innerHTML="";
      
      var a,b,c,d,e,f,g,h,m;
      
        for (m=1; m<=x; m++) {
        a = document.createElement("fieldset"); a.class="fieldset";
        b = document.createElement("label");
        c = document.createTextNode("COURSE CODE:");
        d = document.createTextNode("UNIT:");
        e = document.createTextNode("SCORE:");
        
        f = document.createElement("input");
        f.type = "text";
        f.id = f.value = f.name = "code"+m;
        
        g = document.createElement("input");
        g.type = "text";
        g.id = g.value = g.name = "unit"+m;
        
        h = document.createElement("input");
        h.type = "text";
        h.id = h.value = h.name = "score"+m;
        
        
        b.appendChild(c); //text to label
        b.appendChild(f); //input(course code) to label
        a.appendChild(b); //label to current fieldset
        
        b.appendChild(d); //text to label
        b.appendChild(g); //input(course unit) to label
        a.appendChild(b); //label to current fieldset
        
        b.appendChild(e); //text to label
        b.appendChild(h); //input(score) to label
        a.appendChild(b); //label to current fieldset
        
        
        
        boxes.appendChild(a); //current fieldset to legend with id=boxes
        
        
        } 
        
        
        
      }
  
}
function calcgpa() {
    var form = document.getElementById("courseform");
    var i,cgpa,c,s,u,totalUnitsAccumulated=totalUnitsTaken=0;
    var numberOfBoxes = form.box.value;
    if (error(numberOfBoxes)) {
        if (isNaN(numberOfBoxes) || numberOfBoxes.length == 0) { alert("Number of courses must be a number"); return}     
      for (i=1; i <= numberOfBoxes; i++) {
      c = document.getElementById("code"+i).value;
      s = document.getElementById("score"+i).value;
      u = document.getElementById("unit"+i).value;
        totalUnitsAccumulated += scoreInUnitsType5(s,u);
        totalUnitsTaken += Math.floor(u);
      }
    //after getting totalunits accumulated and taken, we compute cgpa
    cgpa = totalUnitsAccumulated / totalUnitsTaken;
    alert(cgpa);
    
    }
    function error(x) {
      for (i=1; i <= numberOfBoxes; i++) {
      c = document.getElementById("code"+i).value;
      s = document.getElementById("score"+i).value;
      u = document.getElementById("unit"+i).value;
        if ((s > 100) || (s < 0) || isNaN(s)) { alert("Score"+i+" must be a number between 0 and 100"); return false;}
        if ((s > 100) || (s < 0) || isNaN(s)) { alert("Score"+i+" must be a number between 0 and 100"); return false;}
      }
    return true;
    }
    function scoreInUnitsType5(score,unit) {
    if(score >= 70){ return 5*unit;}
    if(score >= 60){ return 4*unit;}
    if(score >= 50){ return 3*unit;}
    if(score >= 40){ return 2*unit;}
    if(score >= 30){ return 1*unit;}
    else{ return 0*unit;}
    }
}
</script>
</body>
</html>