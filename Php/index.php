<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1>KET QUA HOC TAP</h1>
	<form method="get">
		<label for="diemtoan">Điểm toán:</label>
		<input type="number" id="diemtoan" name="diemtoan"><br><br>
        <label for="diemly">Điểm lý:</label>
		<input type="number" id="diemly" name="diemly" ><br><br>
        <label for="diemhoa">Điểm hóa:</label>
		<input type="number" id="diemhoa" name="diemhoa" ><br><br>
        <label for="diemanh">Diem anh:</label>
		<input type="number" id="diemanh" name="diemanh" ><br><br>
        <label for="diemvan">Diem van:</label>
		<input type="number" id="diemvan" name="diemvan"  ><br><br>
        <label for="diemsu">Điểm su:</label>
		<input type="number" id="diemsu" name="diemsu" ><br><br>
		</select><br><br>
		<input type="submit" value="Kiem tra">
	</form>
<?php
    $diemtoan =$_GET['diemtoan'];
    $diemly =$_GET['diemly'];
    $diemhoa =$_GET['diemhoa'];
    $diemanh =$_GET['diemanh'];
    $diemvan =$_GET['diemvan'];
    $diemsu =$_GET['diemsu'];

    $trungbinh = ($diemtoan  + $diemly + $diemhoa +$diemanh +$diemsu +$diemvan)/6;
    if ($diemtoan <0 or $diemtoan>10
    or $diemly <0 or $diemly>10
    or $diemhoa <0 or $diemhoa>10
    or $diemanh <0 or $diemanh>10
    or $diemvan <0 or $diemvan>10
    or $diemsu <0 or $diemsu>10
    )
    {
        echo"Ban nhap sai diem, vui long nhap lai (thang diem tu 0 den 10)";
    }

    elseif($trungbinh<=5 or $diemtoan <4 or $diemly <4 or $diemhoa <4 or $diemvan<4 or $diemanh<4 or $diemsu<4)
    {
        echo"Ban da dat hoc sinh yeu ";

    }

    elseif ($trungbinh >=7.9)
    {
        echo"Ban da dat hoc sinh gioi";

    }
    elseif($trungbinh <= 7.9 and $trungbinh>=6.5 )
    {
        echo"Ban da dat hoc sinh kha ";

    }
    elseif($trungbinh >=5 and $trungbinh<=6.4 )
    {
        echo" Ban da dat hoc sinh trung binh ";

    }
    
    ?>
</body>
</html>