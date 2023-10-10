<?php
$stu_id = $_GET['id'];


$conn = mysqli_connect("localhost", "root", "aBHIGOYAL@1289LK", "crud") or die("Connection failed");

$sql = "DELETE FROM student WHERE sid ={$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query unsuccessful.");

header("Location: http://localhost/abhi/crud/index.php");

mysqli_close($conn);
?>

