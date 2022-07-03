<?php
	$dbconnect=mysqli_connect("localhost","root","","login_reg");
	if(mysqli_connect_errno($dbconnect))
	{
		echo "failed to connect";
	}
	else  {echo "connection successful";}
	?>