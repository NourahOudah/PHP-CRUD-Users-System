<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "sql111.infinityfree.com";
$username = "if0_42402959";
$password = "hyr6WMddqjhy";
$dbname = "if0_42402959_myfirst";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, age, status)
            VALUES ('$name', '$age', 0)";

    $conn->query($sql);
}

// Get all records
$result = $conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Users Data</title>

<link rel="stylesheet" href="style.css">

<script src="script.js"></script>

</head>

<body>

<h2>Users Table</h2>

<table border="1">

<tr>

<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>

</tr>

<?php
while($row = $result->fetch_assoc()){
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td id="status<?php echo $row['id']; ?>">
<?php echo $row['status']; ?>
</td>

<td>

<button onclick="toggleStatus(<?php echo $row['id']; ?>)">
Toggle
</button>

</td>

</tr>

<?php
}
?>

</table>

</body>

</html>

<?php
$conn->close();
?>