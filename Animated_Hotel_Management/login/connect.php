<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$message = filter_input(INPUT_POST, 'message');
if (!empty($name)){
if (!empty($email)){
if (!empty($phone)){
if (!empty($message)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "contactus";
					// Create connection
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
					if (mysqli_connect_error())
					{
							die('Connect Error ('. mysqli_connect_errno() .') '
										. mysqli_connect_error());
					}
						else
							{
								$sql = "INSERT INTO contact (name, email, phone, message)
									values ('$name','$email','$phone','$message')";
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