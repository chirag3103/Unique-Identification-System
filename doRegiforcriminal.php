<?php
$UID=$_POST["UID"];
$F_Name=$_POST["F_Name"];
$L_Name=$_POST["L_Name"];
$case_no=$_POST["case_no"];
$crime=$_POST["crime"];
$date_of_crime=$_POST["date_of_crime"];
$sentence=$_POST["sentence"];



$conn=mysql_connect("localhost","root","") or die ("<h3> sorry could not connect your Mysql.please try again</h3>");
$db=mysql_select_db("Tables",$conn) or die ("<h3> sorry could not connect your Mysql.please try again</h3>");

$query="insert into criminal(UID,F_Name,L_Name,case_no,crime,date_of_crime,sentence)  values('".$UID."','".$F_Name."','".$L_Name."','".$case_no."','".$crime."','".$date_of_crime."','".$sentence."')";

$result=mysql_query($query);
//$row=mysql_fetch_row($result);
if($result)
	{
		header("location:Medical.html");
//		echo "YOU HAVE SUCCESSFULLY REGISTERED.";
		
	}
else
	
	{
		header("location:fail.html");
		//echo "Soryhyhyhyh4 failed......";
	}
				
?>

