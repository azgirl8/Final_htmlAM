<?php


$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if(!empty($firstname)){
if(!empty($lastname)){
if(!empty($email)){
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
$sql = "INSERT INTO sign (firstname, lastname, email, password)
values ('$firstname','$lastname','$email','$password')";
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
echo "email should not be empty";
}
}
else{
echo "lastname should not be empty";
}
}
else{
echo "firstname should not be empty";
die();
}


?>