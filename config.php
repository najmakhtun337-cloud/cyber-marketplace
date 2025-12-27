<?php
$conn = new mysqli("localhost","root","","cyber_marketplace");
if ($conn->connect_error) {
  die("Database Error");
}
session_start();
?>
