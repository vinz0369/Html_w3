<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is it Christmas?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        h1 {
            color: #333;
        }
        p{
            font-size: 200px
        
        }
    </style>
</head>
<body>

<?php
    // Kiểm tra xem có phải là Giáng sinh hay không
    $isChristmas = date('m-d') === '12-25';
?>

<h1>HÔM NAY LÀ NGÀY GIÁNG SINH ?</h1>
<?php if ($isChristmas): ?>
    <p>ĐÚNG</p>
<?php else: ?>
    <p>SAI</p>
<?php endif; ?>

</body>
</html>
