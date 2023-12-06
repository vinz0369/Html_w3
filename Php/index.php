<?php
// connect to the database
require 'connect.php';
mysqli_set_charset($conn, 'UTF8'); // sửa lỗi tiếng việt
// // Create sql to select data
$sql="SELECT * FROM flights";
// run the query and store result to a variable
$result = $conn->query($sql);
print_r($result); // In $result
// close the connection
$conn->close();
?>