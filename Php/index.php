<?php
require 'connect.php';
mysqli_set_charset($conn, 'UTF8');
$sql ="SELECT *FORM fligts";
$result =$conn ->query($sql);
print_r($result);
$row =$result ->fetch_assoc();
echo "<br>";
print_r($row);
$row =$result ->fetch_assoc();
echo "<br>";
print_r ($row);
$conn ->close();
?>