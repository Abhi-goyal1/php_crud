<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit form</title>
</head>
<body>
    <h1>Edit form</h1>

    <?php
    $conn = mysqli_connect("localhost", "root", "aBHIGOYAL@1289LK", "crud") or die("Connection failed");
    $stu_id = $_GET["id"];
    $sql = "SELECT * FROM student WHERE sid = {$stu_id}";

    $result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
    if (mysqli_num_rows($result) > 0 ) {
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="sid" value="<?php echo $row['sid'];?>">
        <input type="text" placeholder="Name" name="sname" value="<?php echo $row['sname'];?>">
        <input type="text" placeholder="Address" name="saddress" value="<?php echo $row['saddress'];?>">
       
        <input type="number" name="sphone" id="" placeholder="Phone" value="<?php echo $row['sphone'];?>">
        <button type="update" name="update">update</button>
    </form>
    <?php
        }
    }
    ?>

</body>
</html>
