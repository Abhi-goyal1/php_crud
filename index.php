
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  table , th,td{
    border: 2px solid black;
    padding: 10px;
  }
</style>
<body>
<h1>All records</h1>


<nav>
    <h1><a href="http://localhost/abhi/crud/add.php">add</a></h1>
</nav>


<?php
$conn = mysqli_connect("localhost", "root","aBHIGOYAL@1289LK","crud") or die("connection failed");

$sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

$result = mysqli_query($conn, $sql) or die("query unsuccessful.");

if(mysqli_num_rows($result)>0){
    ?>
    <table >
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php  echo $row['sid'] ?></td>
                <td><?php  echo $row['sname'] ?></td>
                <td><?php  echo $row['saddress'] ?></td>
                <td><?php  echo $row['cname'] ?></td>
                <td><?php  echo $row['sphone'] ?></td>
                <td> 
                    <a href="http://localhost/abhi/crud/edit.php?id=<?php echo $row['sid'];?>">EDIT</a>
                    <a href="http://localhost/abhi/crud/delete.php?id=<?php echo $row['sid'];?>">DELETE</a>
                </td>
            </tr>
            <?php  }  ?>
        </tbody>
    </table>
    <?php
} else{
    echo "no record found";
}
mysqli_close($conn);
?>

</body>
</html>

