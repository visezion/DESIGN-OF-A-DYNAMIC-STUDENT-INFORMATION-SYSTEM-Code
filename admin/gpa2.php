<CENTER>
<FORM Name="GPACalcForm">
<INPUT TYPE=TEXT SIZE=5 NAME="GR1" >
<INPUT TYPE=TEXT SIZE=5 NAME="CR1" >
<INPUT TYPE=TEXT SIZE=5 NAME="GR2" >
<INPUT TYPE=TEXT SIZE=5 NAME="CR2" >
<INPUT TYPE=TEXT SIZE=5 NAME="GR3">
<INPUT TYPE=TEXT SIZE=5 NAME="CR3" >
<INPUT TYPE=TEXT SIZE=5 NAME="GR4" >
<INPUT TYPE=TEXT SIZE=5 NAME="CR4">
<INPUT TYPE=TEXT SIZE=5 NAME="CR5">
<INPUT TYPE=TEXT SIZE=5 NAME="GR6" >
<INPUT TYPE=TEXT SIZE=5 NAME="CR6" >
<INPUT TYPE=TEXT SIZE=5 NAME="GR7">
<INPUT TYPE=TEXT SIZE=5 NAME="CR7" >
<INPUT TYPE=TEXT SIZE=5 NAME="GR8" >
<INPUT TYPE=TEXT SIZE=5 NAME="CR8" >
<INPUT TYPE="BUTTON" VALUE="Calculate" 
NAME="CalcButton"
OnClick="gpacalc()"></TD>
</TR>
</TABLE>
</FORM>
<BR>
<P>

<P>
</CENTER>

<BR>


<SCRIPT LANGUAGE="JavaScript">

<!-- 
function gpacalc()
{
//define valid grades and their values
var gr = new Array(9); 
var cr = new Array(9);
var ingr = new Array(5);
var incr = new Array(5);

// define valid grades and their values
var grcount = 11; 
gr[0] = "A";
cr[0] = 5;
gr[1] = "B"; 
cr[1] = 4; 
gr[2] = "C";
cr[2] = 3;
gr[3] = "D";
cr[3] = 2;
gr[4] = "E";
cr[4] = 1;
gr[5] = "F";
cr[5] = 0;

// retrieve user input
ingr[0] = document.GPACalcForm.GR1.value;
ingr[1] = document.GPACalcForm.GR2.value;
ingr[2] = document.GPACalcForm.GR3.value;
ingr[3] = document.GPACalcForm.GR4.value;
ingr[4] = document.GPACalcForm.GR5.value;
ingr[5] = document.GPACalcForm.GR6.value;
ingr[6] = document.GPACalcForm.GR7.value;
ingr[7] = document.GPACalcForm.GR8.value;
incr[0] = document.GPACalcForm.CR1.value;
incr[1] = document.GPACalcForm.CR2.value;
incr[2] = document.GPACalcForm.CR3.value;
incr[3] = document.GPACalcForm.CR4.value;
incr[4] = document.GPACalcForm.CR5.value;
incr[5] = document.GPACalcForm.CR6.value;
ingr[6] = document.GPACalcForm.GR7.value;
ingr[7] = document.GPACalcForm.GR8.value;

// Calculate GPA
var allgr =0;
var allcr = 0;
var gpa = 0;
for (var x = 0; x < 5 + 3; x++)
        {
        if (ingr[x] == "") break;
//      if (isNaN(parseInt(incr[x]))) alert("Error- You did not enter a numeric  credits value for Class If the class is worth 0 credits then enter the number 0 in  the field."); 
        var validgrcheck = 0;
        for (var xx = 0; xx < grcount; xx++)
                {
                if (ingr[x] == gr[xx])
                        {
                        allgr = allgr + (parseInt(incr[x],10) * cr[xx]);
                        allcr = allcr + parseInt(incr[x],10);
                        validgrcheck = 1;
                        break;
                        }
                }
        if (validgrcheck == 0)
                {
                alert("Error- Could not recognize the grade entered for Class " + eval(x +  1) + ". Please use standard college grades in the form of A A- B+ ...F.");
                return 0;
                }
        }

// this if-check prevents a divide by zero error
if (allcr == 0)
        {
        alert("Error- You did not enter any credit values! GPA = N/A");
        return 0;
        }

gpa = allgr / allcr;

alert("GPA =  " + eval(gpa));

return 0;
}

//-->
    
</SCRIPT>

<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
<font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
Kit</a></font></p>