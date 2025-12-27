<?php include "config.php";
if($_POST){
$u=$_POST['username'];
$e=$_POST['email'];
$p=password_hash($_POST['password'],PASSWORD_DEFAULT);
$conn->query("INSERT INTO users VALUES(NULL,'$u','$e','$p')");
header("location:login.php");
}
?>
<form method="post">
<input name="username" placeholder="Username">
<input name="email" placeholder="Email">
<input name="password" type="password" placeholder="Password">
<button>Register</button>
</form>
