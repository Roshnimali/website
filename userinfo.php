<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


mysqli_select_db($conn, "websiteuserdata");


$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query ="insert into userinfodata (user , email, mobile , comment) values('$user' , '$email', '$mobile', '$comment')" ;

echo '$query';
mysqli_query($conn , $query);

header('location:index.php')
?>