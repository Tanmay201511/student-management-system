<?php include 'config.php';

if(isset($_POST['register'])){
$email=$_POST['email'];
$pass=password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($conn,"INSERT INTO users(email,password)
VALUES('$email','$pass')");

echo "<script>alert('Registered');</script>";
}
?>

<link rel="stylesheet" href="style.css">

<div class="form-box">
<h2>Register</h2>

<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>

<a href="login.php">Login</a>
</div>