<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>

<?php

    $tireqty =  $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];

    $total_Amount = $tireqty + $oilqty + $sparkqty;

    if($total_Amount==0)
    {
        echo "You did not order anything ";
    }
    else{
        echo 'Order was made in ';
        echo date('j F Y');
        echo "<br />";

        if($oilqty=="") $oilqty = 0;
        if($sparkqty=="") $sparkqty = 0;
        if($tireqty=="") $tireqty = 0;

        echo "Total amount is $total_Amount<br />";

        echo "Tire $tireqty <br />".
        "Oil $oilqty <br />".
        "Spark $sparkqty <br />";

        //$
        define('NDS',0.20);
        define('Tire', 200);
        define('Oil',50);
        define('Spark', 15);

        $total_Summ = Tire*$tireqty + Oil*$oilqty + Spark*$sparkqty;
        $total_Summ += $total_Summ*NDS;

        echo " Total summ is <strong> $total_Summ $ </strong>";
    }
?>