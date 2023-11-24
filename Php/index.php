<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Listbox</title>
</head>
<body>

<form method="get">
    <label for="day">Ngày:</label>
    <select name="day" id="day">
        <?php
        for ($day = 1; $day <= 31; $day++) {
            echo "<option value='$day'>$day</option>";
        }
        ?>
    </select>

    <label for="month">Tháng:</label>
    <select name="month" id="month">
        <?php
        for ($month = 1; $month <= 12; $month++) {
            echo "<option value='$month'>$month</option>";
        }
        ?>
    </select>

    <label for="year">Năm:</label>
    <select name="year" id="year">
        <?php
        $today = getdate();
    
        for ($year =$today["year"]; $year >= 1900; $year--) {
            echo "<option value='$year'>$year</option>";
        }
        ?>
    </select>
    <input type="submit" value="Submit"> <br>
</form>
<?php
    $day=$_GET["day"];
    $month=$_GET["month"];
    $year=$_GET["year"];
    echo"Ngày bạn lựa chọn là : $day - $month - $year";
?>
</body>
</html>
