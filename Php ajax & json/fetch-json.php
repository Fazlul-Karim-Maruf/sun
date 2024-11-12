<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("connection failed");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query failed");
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);
?>