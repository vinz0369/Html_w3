
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
