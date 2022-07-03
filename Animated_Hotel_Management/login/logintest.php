<?php
mysql_connect("localhost","root","");
mysql_select_db("youtube");
if(isset($_REQUEST("submit")))
{
	$id=$_REQUEST["username"];
	$pass=$_REQUEST["password"];
	$query=mysql_query("SELECT * from account where 'username'=$username && password='$password'");
	$rowcount=mysql_num_rows($query);
	if($rowcount==true)
	{
		echo "Correct PassWord";
	}
	else
	{
		echo "Incorrect PassWord";
	}
}
?>
