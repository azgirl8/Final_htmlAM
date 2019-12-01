<?php

$message = filter_input(INPUT_POST, 'message');


if(!empty($message)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname = "login";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errorno() .') '. mysqli_connect_error());

}
else{
$sql = "INSERT INTO message (message)
values ('$message')";
if ($conn->query($sql)){
echo "New record inserted sucessfully";
header('Location:index.html');
}
else{
echo "Error: ". $sql ."<br>". $conn->error; 
}
$conn->close();
}
}
else{
echo "Please Enter message";
die();
}




?>