<?php
$name = filter_input(INPUT_POST, 'name');
$id = filter_input(INPUT_POST, 'id');
$email = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'pass');
if (!empty($name)){
if (!empty($id)){
if (!empty($email)){
if (!empty($pass)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "login";
					// Create connection
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
					if (mysqli_connect_error())
					{
							die('Connect Error ('. mysqli_connect_errno() .') '
										. mysqli_connect_error());
					}
						else
							{
								$sql = "INSERT INTO signup (name, id, email, pass)
									values ('$name','$id','$email','$pass')";
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
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>