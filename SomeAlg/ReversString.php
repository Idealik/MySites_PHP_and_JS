<?php
echo "<p>Revers string <br /> </p>";

$myMsg = "Hi my name is Mark";
    for($i=strlen($myMsg); $i>=0; $i--){
        $myMsg.=$myMsg[$i];
        $myMsg[$i] = ' ';
    }
    echo $myMsg;
?>