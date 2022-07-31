<?php

$stu_id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "admin12345", "crud") or die("Connection Failed");
$sql = "delete from student where sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die(" Query Unsuccessful.");

header("Location: index.php");

mysqli_close($conn)

?>