<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>add new records</h1>
    
    <form action="action.php" method="post">

        <input type="text" placeholder="name" name="sname">
        <input type="text" placeholder="address" name="saddress">
        <label>class</label>
        <select name="class" id="">
            <option value="" selected disabled >select class</option>
           <?php
            $conn = mysqli_connect("localhost", "root","aBHIGOYAL@1289LK","crud") or die("connection failed");

            $sql = "SELECT * FROM studentclass";

            $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

            while($row = mysqli_fetch_assoc($result)){
                ?>
            <option value="3"><?php echo $row['cname'];?></option>

           <?php
            }
           ?>
        </select>
        <input type="number" name="sphone" id="" placeholder="phone">
        <button name="save">save</button>

    </form>



</body>
</html>