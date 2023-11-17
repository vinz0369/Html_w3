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
		<input type="number" name="cannang"><br><br>
		
        <input type="radio" name="gioitinh" value="nam"> Nam
        <input type="radio" name="gioitinh" value="nu"> Nu

	
		</select><br><br>
		<input type="submit" value="Kiem tra">
	</form>
<?php
    
    $chieucao =$_GET['chieucao'];
    $cannang =$_GET['cannang'];
    $gioitinh =$_GET['gioitinh'];

    if ($gioitinh =="nam" and $cannang >= 50 and $chieucao >=160 )
    {
        echo"Ban da dat yeu cau vao cong ty";
    }
    elseif($gioitinh =="nu" and $cannang >=40 and $cannang <=70 and $chieucao>=150)
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