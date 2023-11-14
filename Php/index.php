<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1>Currency Converter</h1>
	<form method="get">
		<label for="amount">Amount:</label>
		<input type="number"  name="amount"><br><br>
		<label for="currency">Select currency:</label>
		<select  name="currency">
			<option value="USD">USD</option>
			<option value="AUD">AUD</option>
			<option value="JPY">JPY</option>
			<option value="EUR">EUR</option>
		</select><br><br>
		<input type="submit" value="Convert">
	</form>
<?php
    $USD =23000;
    $AUD =17000;
    $JPY =200;
    $EUR =27000;
    $amount =$_GET['amount'];
    if ($_GET["currency"]=="USD")
    {
        echo"$amount USD is equal ";

        echo $amount * $USD;
    

    }
    elseif($_GET["currency"] =="AUD")
    {
        echo"$amount AUD is equal ";

        echo $amount * $AUD;
    }
    elseif($_GET["currency"] =="JPY")
    {
        echo"$amount JPY is equal ";

        echo $amount * $JPY;
    }
    else
    {
        echo"$amount EUR is equal ";

        echo $amount *$EUR;
    }
    echo"VND";
    ?>
</body>
</html>