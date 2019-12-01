<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if(!empty($username)){
if(!empty($password)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname = "login";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errorno() .') '. mysqli_connect_error());

}
else{
$sql = "INSERT INTO accounts (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record inserted sucessfully";
header('Location:events.html');
}
else{
echo "Error: ". $sql ."<br>". $conn->error; 
}
$conn->close();
}
}
else{
echo "Password should not be empty";
}
}
else{
echo "Username should not be empty";
die();
}


?>