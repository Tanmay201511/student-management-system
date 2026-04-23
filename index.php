<?php include 'config.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2>🎓 Student Dashboard</h2>

<a href="logout.php" class="btn logout">Logout</a>

<form method="GET">
<input type="text" name="search" placeholder="Search student">
<button>Search</button>
</form>

<a href="insert.php" class="btn">+ Add Student</a>

<div class="table-box">
<table>
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th>
</tr>

<?php
$search = $_GET['search'] ?? '';
$res = mysqli_query($conn,"SELECT * FROM students WHERE name LIKE '%$search%'");

while($row=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['name']}</td>
<td>{$row['email']}</td>
<td>{$row['course']}</td>
<td><a href='delete.php?id={$row['id']}' class='delete'>Delete</a></td>
</tr>";
}
?>
</table>
</div>

</div>