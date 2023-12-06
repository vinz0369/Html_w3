<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
        <h1>Thêm chuyến bay</h1>
        <label>id</label><br>
        <input class="info" type="text" name="id" required ><br>
        <label>origin</label><br>
        <input class="info" type="text" name="origin" required ><br>
        <label>destination</label><br>
        <input class="info" type="text" name="destination" required ><br>
        <label>duration</label><br>
        <input class="info" type="text" name="duration" required ><br>

        <input type="submit" name="submit" value="Add"><br>

    </form>

    <?php
if (isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['duration']) && isset($_POST['id'])){
    $origin = $_POST['origin'];
    $duration = $_POST['duration'];
    $destination= $_POST['destination'];
    $id = $_POST['id'];

    require('connect.php');
    mysqli_set_charset($conn, 'UTF-8');
    $sql = "INSERT INTO flights (id, origin, destination, duration) VALUES ('$id', '$origin', '$destination', '$duration')";

    if ($conn->query($sql) === true){
        echo "Thêm thành công";
    } else {
        echo "Lỗi: " .$sql. $conn->error;
    }
}
?>
</body>
</html>