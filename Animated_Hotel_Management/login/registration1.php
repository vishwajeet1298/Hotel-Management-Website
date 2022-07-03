<?php

$id=$_POST['id'];
$email=$_POST['email'];
$name=$_POST['name'];
$pass=$_POST['pass'];

if (!empty($id) || !empty($pass) || !empty($email) || !empty($name))
{
	$host="localhost";
	$dbUsername = "root";
    $dbPassword = "";
    $dbname = "login";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From registration1 Where email = ? Limit 1";
     $INSERT = "INSERT Into registration1 (id, email, name, pass) values(?, ?, ?, ?,)";


     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("isss", $id, $name, $email, $pass,);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();

}

else {
	echo "All fields are required";
	die();
}

$file="file.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting your email address!</h1>";
?>   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Thank you</title>
</head>

<body>

<h1><a href="form.html">GO BACK</a> </h1>
</body>
</html>
