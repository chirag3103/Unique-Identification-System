<?php
$UID=$_POST["UID"];
$F_Name=$_POST["F_Name"];
$Medical_History=$_POST["Medical_History"];
$Medicines=$_POST["Medicines"];


$conn=mysql_connect("localhost","root","") or die ("<h3> sorry could not connect your Mysql.please try again</h3>");
$db=mysql_select_db("Tables",$conn) or die ("<h3> sorry could not connect your Mysql.please try again</h3>");

$query="insert into medical(UID,F_Name,Medical_History,Medicines) values('".$UID."','".$F_Name."','".Medical_History."','".$Medicines."')";

$result=mysql_query($query);
//$row=mysql_fetch_row($result);
if($result)
	{
		header("location:main.html");
//		echo "YOU HAVE SUCCESSFULLY REGISTERED.";
		
	}
else
	
	{
		header("location:fail.html");
		//echo "Soryhyhyhyh4 failed......";
	}
				
?>


