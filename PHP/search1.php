
<?php
session_start();
?>

<html>
<head>
 <meta charset="UTF-8">
 <title>Register</title> 
 <link href="jhan.css" rel="stylesheet" type="text/css"/>
 <script src="menu.js"></script>
 
 <link rel="stylesheet" href="style.css"/>
 
 
</head>
<body background="comp.jpg">
<div class="separator" style="clear: both; text-align: center;">
<center><b>
<span style="font-family: Georgia,&quot;Times New Roman&quot;,serif;"><span style="font-size: x-large;"><br> 
<b>S</b>earch
<b>R</b>esults
</span></span>
</b></center>
<form method="post" action="main.html" id="searchform"></p>
<p align="center">		
<name="identity"><input type="submit" name = "return"  value="Return">
 </p>

<p align="center">
  <?php

$con=mysqli_connect("localhost","root","","tables") or die(mysql_error());
//mysql_select_db("tables") or die (mysql_error());


$userid= $_POST['identity'];

echo "<div class=\"wapfever\" align=\"center\">Personal Information\n"; 
echo "</div>\n";

$result=mysqli_query($con, "select * from register where UID='$userid';") or die(mysql_error());


while($row=mysqli_fetch_array($result))
{
echo "<center>";
echo "<div class=\"foncity\">\n"; 
echo "<div class=\"\"foncity>";
echo "<table><tbody><tr><td>UID :</td><td>";
echo  $row['UID'];
echo "\n"; 
echo "</td></tr>\n"; 
echo "<tr><td>First Name : </td><td>";
echo  $row['F_Name'];
echo "</td></tr> <tr><td>Last Name : </td><td>";
echo  $row['L_Name'];
echo "</td></tr><tr><td>Gender :</td><td>";
echo $row['GENDER'];
echo "\n";  
echo "</td></tr> <tr><td>Date Of Birth :</td><td>";
echo  $row['DOB'];
echo "</td></tr>";
echo "<tr><td>Age :</td><td>";
echo  $row['AGE'];
echo "\n"; 
echo "</td></tr>\n<tr><td>Address : </td><td>";
echo $row['ADDRESS'];
echo "</td><td></td></tr><tr></tr><tr><td>Nationality :</td><td>";
echo $row['NATIONALITY'];
echo "</td></tr><tr><td>PAN :</td><td>";
echo $row['PAN'];
echo "</td></tr><tr><td>LIC :</td><td>";
echo $row['LIC'];
echo "</td></tr></tbody></table></div>\n";
echo "</table>";
echo "</div>";
echo"</center>";
}


echo "<div class=\"wapfever\" align=\"center\">Financial Information\n"; 
echo "</div>\n";

$result=mysqli_query($con, "select * from financial where UID='$userid';") or die(mysql_error());

while($row=mysqli_fetch_array($result))
{
echo"<center>";
echo "<div class=\"foncity\">\n"; 
echo "<table><tbody><tr><td>UID :</td><td>";
echo  $row['UID'];
echo "\n"; 
echo "</td></tr>\n"; 
echo "<tr><td>First Name : </td><td>";
echo  $row['F_Name'];
echo "</td></tr><tr><td>Bank :</td><td>";
echo $row['Acc_No'];
echo "\n";  
echo "</td></tr></tbody></table></div>\n";
echo "</table>";
echo "</div>\n";
echo"</center>";

}

echo "</table>";

echo "<div class=\"wapfever\" align=\"center\">Criminal Records\n"; 
echo "</div>\n";

$result=mysqli_query($con, "select * from criminal where UID='$userid';") or die(mysql_error());

while($row=mysqli_fetch_array($result))
{
echo"<center>";
echo "<div class=\"foncity\">\n";  
echo "<table><tbody><tr><td>UID :</td><td>";
echo  $row['UID'];
echo "\n"; 
echo "</td></tr>\n"; 
echo "<tr><td>First Name : </td><td>";
echo  $row['F_Name'];
echo "</td></tr><tr><td>Case No :</td><td>";
echo  $row['case_no'];
echo "\n";  
echo "</td></tr><tr><td>Crime Name : </td><td>";
echo $row['crime'];
echo "</td></tr> <tr><td>Date Of Crime : </td><td>";
echo  $row['date_of_crime'];
echo "</td></tr><tr><td>Statement :</td><td>";
echo $row['sentence'];
echo "\n";  
echo "</td></tr></tbody></table></div>\n";
echo "</table>";
echo "</div>\n";
echo"</center>";

}

echo "</table>";

echo "<div class=\"wapfever\" align=\"center\">Medical Details\n"; 
echo "</div>\n";


$result=mysqli_query($con, "select * from medical where UID='$userid';") or die(mysql_error());

while($row=mysqli_fetch_array($result))
{
echo"<center>";
echo "<div class=\"foncity\">\n"; 
echo "<table><tbody><tr><td>UID :</td><td>";
echo  $row['UID'];
echo "\n"; 
echo "</td></tr>\n"; 
echo "<tr><td>First Name : </td><td>";
echo  $row['F_Name'];
echo "</td></tr><tr><td>Medicines : </td><td>";
echo  $row['Medicines'];
echo "</td></tr><tr><td>Medical History :</td><td>";
echo $row['Medical_History'];
echo "\n";  
echo "</td></tr></tbody></table></div>\n";
echo "</table>";
echo "</div>\n";
echo"</center>";

}
echo "</table>";


mysqli_close($con);
?>
</p>


<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>                         

</body>
</html>