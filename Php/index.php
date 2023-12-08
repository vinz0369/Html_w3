<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

require('.//admin/db.php');

    // Thực hiện truy vấn để lấy thông tin người dùng
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Kiểm tra mật khẩu
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];

            echo "success";
        } else {
            echo "Sai mật khẩu";
        }
    } else {
        echo "Email không tồn tại";
    }
    

    // Đóng kết nối
    $conn->close();
}


?>
