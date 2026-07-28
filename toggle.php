<?php

$servername = "sql111.infinityfree.com";
$username = "if0_42402959";
$password = "hyr6WMddqjhy";
$dbname = "if0_42402959_myfirst";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed");
}

$id = $_POST['id'];

$sql = "UPDATE users
        SET status = IF(status=0,1,0)
        WHERE id = $id";

$conn->query($sql);

$result = $conn->query("SELECT status FROM users WHERE id=$id");
$row = $result->fetch_assoc();

echo $row['status'];

$conn->close();

?>