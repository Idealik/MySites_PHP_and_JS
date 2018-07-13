<?php

    $tireqty =  $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $adress = $_POST['adress'];

    $total_Amount = $tireqty + $oilqty + $sparkqty;

    if($total_Amount==0)
    {
        echo "You did not order anything ";
    }
    else{
        echo  "<h1> Your order </h1>";
        $date = date('j F Y');
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
        echo "<br />";

        echo "Adress: $adress";
        echo "<br />";

        //Here i try to write orders in my file "orders.txt"
        $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
        
        $outputstrings = "total amount = ". $total_Amount .
         ", total summ = ".$total_Summ.
         ", Oil = ".$oilqty .
         ", Spark = ".$sparkqty.
         ", Tire =  ".$tireqty.
         ", Adress: ". $adress.
         ", Date: ". $date."\r\n";

        @ $fileOpen = fopen("$DOCUMENT_ROOT/mysite/order/orders.txt", 'ab'); 
      //  @ $fileOpen = fopen("Z:/home/localhost/www/mySite/orders.txt", 'ab'); 
        if(!$fileOpen){
            echo "<p> Server is not working now. Please try later </p>";
            exit;
        }
        fwrite($fileOpen,$outputstrings);
        fclose($fileOpen);

        echo "<p>Order was recorded </p>";

        require_once "pictures/visual_Pic.php";
     
        
    }
?>
