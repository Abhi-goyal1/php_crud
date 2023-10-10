<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "aBHIGOYAL@1289LK", "crud") or die("Connection failed");

// You were missing the curly braces around $stu_id in the SQL query.
$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query unsuccessful.");

header("Location: http://localhost/abhi/new/index.php");

mysqli_close($conn);
?>
