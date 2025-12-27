<?php include "config.php";
$n=$_POST['name'];
$e=$_POST['email'];
$m=$_POST['message'];
$conn->query("INSERT INTO messages VALUES(NULL,'$n','$e','$m')");
echo "Message Sent";
