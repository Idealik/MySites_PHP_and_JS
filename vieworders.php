<?php
        $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Autoteh from Ideal - orders by clients </title>
</head>
<body>
    <h1>Autoteh from Ideal</h1>
    <h2>Orders by clients</h2>
    <?php
    @ $fileOpen = fopen("$DOCUMENT_ROOT/mysite/order/orders.txt","rb");
    if(!$fileOpen){
        echo "<p> Empty </p>";
        exit;
    }
    
    while(!feof($fileOpen)){
        $order = fgets($fileOpen,999);
        echo $order. "<br />";
    }
    fclose(($fileOpen));    
    ?>
</body>
</html>