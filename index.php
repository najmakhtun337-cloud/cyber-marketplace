<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Cyber Marketplace | CK-ERROR</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>CYBER MARKETPLACE</h1>
<p>Owner: CK-ERROR</p>
<a href="login.php">Login</a> | <a href="register.php">Register</a>
</header>

<section>
<h2>Services</h2>
<div class="card">Cyber Security Consulting</div>
<div class="card">Website Security Audit</div>
<div class="card">Bug Bounty Guidance</div>
<div class="card">Automation Tools</div>
</section>

<section>
<h2>Marketplace</h2>
<?php
$r=$conn->query("SELECT * FROM products");
while($row=$r->fetch_assoc()){
echo "<div class='card'>
<b>{$row['title']}</b><br>
{$row['description']}<br>
Price: {$row['price']}
</div>";
}
?>
</section>

<section>
<h2>Contact</h2>
<form action="contact.php" method="post">
<input name="name" placeholder="Name" required>
<input name="email" placeholder="Email" required>
<textarea name="message" placeholder="Message"></textarea>
<button>Send</button>
</form>
</section>

<footer>© 2025 CK-ERROR</footer>
</body>
</html>
