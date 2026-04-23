<?php include 'config.php';

if(isset($_POST['add'])){
$name=$_POST['name'];
$email=$_POST['email'];
$course=$_POST['course'];

mysqli_query($conn,"INSERT INTO students(name,email,course)
VALUES('$name','$email','$course')");

header("Location: index.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="form-box">
<h2>Add Student</h2>

<form method="POST">
<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="course" placeholder="Course" required>

<button name="add">Add</button>
</form>

<a href="index.php">Back</a>
</div>