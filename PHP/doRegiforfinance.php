<?php
$UID=$_POST["UID"];
$F_Name=$_POST["F_Name"];
$Bank=$_POST["Bank"];
$Acc_No=$_POST["Acc_No"];


$conn=mysql_connect("localhost","root","") or die ("<h3> sorry could not connect your Mysql.please try again</h3>");
$db=mysql_select_db("Tables",$conn) or die ("<h3> sorry could not connect your Mysql.please try again</h3>");

$query="insert into financial(UID,F_Name,Bank,Acc_No) values('".$UID."','".$F_Name."','".$Bank."','".$Acc_No."')";

$result=mysql_query($query);
//$row=mysql_fetch_row($result);
if($result)
	{
		header("location:Criminal.html");
//		echo "YOU HAVE SUCCESSFULLY REGISTERED.";
		
	}
else
	
	{
		header("location:fail.html");
		//echo "Soryhyhyhyh4 failed......";
	}
				
?>

