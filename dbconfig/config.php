<?php
$servername="localhost";
$username="root";
$password="";
$conn=new msqli($servername, $username, $password);
if($conn->connect_error){
  die("Connection failed: .conn->connect_error");
}
echo "Connected Successfully"
?>
