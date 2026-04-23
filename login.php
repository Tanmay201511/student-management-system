<?php include 'config.php';

if(isset($_POST['login'])){
$email=$_POST['email'];
$pass=$_POST['password'];

$res=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user=mysqli_fetch_assoc($res);

if($user && password_verify($pass,$user['password'])){
$_SESSION['user']=$email;
header("Location: index.php");
} else {
echo "<script>alert('Invalid Login');</script>";
}
}
?>

<link rel="stylesheet" href="style.css">

<div class="form-box">
<h2>Login</h2>

<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

<a href="register.php">Create Account</a>
</div>