<?php
$fname = filter_input(INPUT_POST, 'fname');
$user = filter_input(INPUT_POST, 'user');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($fname)){
if (!empty($user)){
if (!empty($email)){
if (!empty($password)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "signup";
					// Create connection
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
					if (mysqli_connect_error())
					{
							die('Connect Error ('. mysqli_connect_errno() .') '
										. mysqli_connect_error());
					}
						else
							{
								$sql = "INSERT INTO reg (fname, user, email, password)
									values ('$fname','$user','$email','$password')";
if ($conn->query($sql))
{
echo "New record is inserted sucessfully";
}
else
{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}
}
?>