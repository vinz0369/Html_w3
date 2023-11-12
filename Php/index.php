<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Confirm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .confirm {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="confirm">
    
        <h2>Xác nhận thông tin</h2>
        <p>Tên của bạn là: <?php echo $_POST["name"];//ten ?></p>
        <p>Bạn <?php echo $_POST["age"]; //tuoi?> tuổi</p>
        <p>Địa chỉ của bạn là: <?php echo $_POST["add"]; //dia chi?></p>
        <p>Địa chỉ email: <?php echo $_POST["email"]; //email?></p>
        <p>Số điện thoại: <?php echo $_POST["phonenumber"]; //sodienthoai?></p>
    
    </div>
</body>
</html>
