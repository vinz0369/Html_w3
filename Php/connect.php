<?php
$conn = new mysqli($127.0.0.1,$root,$,$mydb);
if($conn->connect_error){
    echo"kết nối bị lỗi",$conn->connect_error;
}
echo "Kết nối thành công <br>";
?>