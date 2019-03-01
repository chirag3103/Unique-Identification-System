<?php
$User_Id=$_POST["User_Id"];
$Pswd=$_POST["Pswd"];

$conn=mysql_connect("localhost","root","") or die ("<h3> sorry could not connect your Mysql.please try again</h3>");
$db=mysql_select_db("Tables",$conn) or die ("<h3> sorry could not connect your Mysql.please try again</h3>");

$query="insert into store(User_Id,Pswd) values('".$User_Id."','".$Pswd."')";

$result=mysql_query($query);
//$row=mysql_fetch_row($result);
if($result)
	{
  		header("location:main.html");
		echo "YOU HAVE SUCCESSFULLY REGISTERED.";
		
	}
else
	
	{
//		header("location:fail.html");
echo "Soryhyhyhyh4 failed......";
	}
				
?>
