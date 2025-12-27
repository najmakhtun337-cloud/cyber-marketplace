<?php include "config.php";
if($_POST){
$u=$_POST['username'];
$p=$_POST['password'];
$r=$conn->query("SELECT * FROM users WHERE username='$u'");
$row=$r->fetch_assoc();
if(password_verify($p,$row['password'])){
$_SESSION['user']=$u;
header("location:dashboard.php");
}
}
?>
<form method="post">
<input name="username">
<input name="password" type="password">
<button>Login</button>
</form>
