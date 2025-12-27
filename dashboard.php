<?php include "config.php";
if(!isset($_SESSION['user'])) header("location:login.php");
?>
<h2>Welcome CK-ERROR</h2>
<a href="add_product.php">Add Product</a> |
<a href="logout.php">Logout</a>
