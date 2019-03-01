                        /*****Personal*****/


<?php
$UID=$_POST["UID"];
$F_Name=$_POST["F_Name"];
$L_Name=$_POST["L_Name"];
$GENDER=$_POST["GENDER"];
$DOB=$_POST["DOB"];
$AGE=$_POST["AGE"];

$ADDRESS=$_POST["ADDRESS"];
$NATIONALITY=$_POST["NATIONALITY"];
$PAN=$_POST["PAN"];
$LIC=$_POST["LIC"];



$conn=mysql_connect("localhost","root","") or die ("<h3> sorry could not connect your Mysql.please try again</h3>");
$db=mysql_select_db("Tables",$conn) or die ("<h3> sorry could not connect your Mysql.please try again</h3>");

$query="insert into register (UID,F_Name,L_Name,DOB,GENDER,AGE,ADDRESS,NATIONALITY,PAN,LIC) values ('".$UID."','".$F_Name."','".$L_Name."','".$DOB."','".$GENDER."','".$AGE."','".$ADDRESS."','".$NATIONALITY."','".$PAN."','".$LIC."')";

$result=mysql_query($query);
//$row=mysql_fetch_row($result);
if($result)
	{
		header("location:Financial.html");
//		echo "YOU HAVE SUCCESSFULLY REGISTERED.";
		
	}
else
	
	{
		header("location:fail.html");
		//echo "Soryhyhyhyh4 failed......";
	}
				
?>


