<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title?></title>
</head>
<body>
    <?php
    echo"THE GAME";
    if ($_GET["response"] == "yes")
    {
        echo "HAS BEEN QUITED";
    }
    else
    {
        echo"WILL BE CONTINUED IN 3 SECONDS";
    }
    echo"<br>AFTER IF STATEMENT";
    ?>
</body>
</html>