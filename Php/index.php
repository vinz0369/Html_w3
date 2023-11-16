<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1>Kiem tra suc khoe</h1>
	<form method="get">
		<label for="chieucao">Chieu cao:</label>
		<input type="number"  name="chieucao"><br><br>
        <label for="cannang">Can nang:</label>
		<input type="number"  name="cannang"><br><br>
		
        <input type="radio" name="gioitinh" value="nam"> Nam
        <input type="radio" name="gioitinh" value="nu"> Nu

	
		</select><br><br>
		<input type="submit" value="Kiem tra">
	</form>
<?php
    $chieucaonam =160;
    $cannangnam =50;
    $chieucaonu =150;
    $cannangnu1 =40;
    $cannangnu2 = 70;
    $chieucao =$_GET["chieucao"];
    $cannang =$_GET["cannang"];
    $gioitinh =$_GET["gioitinh"];

    if ($gioitinh =="nam" and $cannangnam >= 50 and $chieucaonam >=160 )
    {
        echo"Ban da dat yeu cau vao cong ty";
    }
    elseif($gioitinh =="nu" and $cannangnu1 >=40 and $cannangnu2 <=70 and $chieucaonu>=150)
    {
        echo"Ban da dat yeu cau vao cong ty";
    }
    else
    {
        echo"Ban chua dat yeu cau vao cong ty"; 
    }
    ?>
</body>
</html>