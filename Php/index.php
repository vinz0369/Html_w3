<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Search Flight</h1>
    <form method="get" action="" name="register">
    Origin <input type="text" name="origin" id=""><br>
    Destination <input type="text" name="destination" id=""><br>
    <input type="submit" name="" id="" value="Search"><br>
    </form>
    <?php
    if (isset($_GET['origin']))
    {
        $origin =$_GET['origin'];
        $destination =$_GET['destination'];
        require 'connect.php';
        mysqli_set_charset($conn, 'UTF8');
        $sql="SELECT * FORM fights WHERE origin ='$origin' and destination = '$destination'";
        $result =$conn ->query ($sql);
        require ('display.php');
        $conn ->close();

    }
    ?>
</body>
</html>