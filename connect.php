<?php
$servername = 'localhost';
$username = 'root';
$password = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $username=$_POST['username'];
  $password=$_POST['password'];

}
// Create connection
$conn = new mysqli($servername, $username, $password,'login');

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
if($conn){
  //echo "Connection sucessfull";
  $sql="insert into login (username, password) values('$username1', '$password1')";
  $result=mysqli_query($con, $sql);
  if($result)
  {
    echo "Data inserted successfully";
  }
  else 
  {
    die(mysqli_error($con));
  }
}
else{
  die(mysqli_error($conn));
}
?>