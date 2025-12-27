<?php include "config.php";
if($_POST){
$t=$_POST['title'];
$d=$_POST['description'];
$p=$_POST['price'];
$conn->query("INSERT INTO products VALUES(NULL,'$t','$d','$p')");
}
?>
<form method="post">
<input name="title" placeholder="Title">
<textarea name="description"></textarea>
<input name="price" placeholder="Price">
<button>Add</button>
</form>
