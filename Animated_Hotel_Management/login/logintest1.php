<?php
mysql_connect("localhost","root","");
mysql_select_db("login");
if(isset($_REQUEST("submit")))
{
	$id=$_REQUEST["id"];
	$pass=$_REQUEST["pass"];
	$query=mysql_query("SELECT * from signup where 'id'=$id && pass='$pass'");
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
