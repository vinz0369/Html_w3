<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1>Du bao trung tuyen</h1>
	<form method="get">
		<label for="diemtoan">Điểm toán:</label>
		<input type="number"  name="diemtoan"><br><br>
        <label for="diemly">Điểm lý:</label>
		<input type="number"  name="diemly"><br><br>
        <label for="diemhoa">Điểm hóa:</label>
		<input type="number"  name="diemhoa"><br><br>
	
		</select><br><br>
		<input type="submit" value="Kiem tra">
	</form>
<?php
    $CNTT =18;
    $CNTTCLC =22;
    $KHDL =18;
    $DC =17;
    $MT = 15;
    $diemtoan =$_GET['diemtoan'];
    $diemly =$_GET['diemly'];
    $diemhoa =$_GET['diemhoa'];
    $trungbinh = $diemtoan  + $diemly + $diemhoa;

    if ($trungbinh >=$CNTTCLC)
    {
        echo"Ban da trung tuyen nganh CNTT_CLC";

    }
    elseif($trungbinh >= $CNTT)
    {
        echo"Ban da trung tuyen nganh CNTT ";

    }
    elseif($trungbinh >= $KHDL)
    {
        echo"Ban da trung tuyen nganh KHDL ";

    }
    elseif($trungbinh >= $DC)
    {
        echo"Ban da trung tuyen nganh DIA CHAT ";

    }
    else
    {
        echo"Ban da trung tuyen nganh MOI TRUONG ";

    }
 
    ?>
</body>
</html>