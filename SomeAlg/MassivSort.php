<?php
    echo "<p>Sort Mass<br /> </p>";
    $mass1 = array(2,4,1,9,5,7,8);
    for($i=0; $i<count($mass1); $i++){
        echo "$mass1[$i]";
    }
    echo "<br />";
    for($i=0; $i<count($mass1); $i++){
        for($j=$i+1; $j<count($mass1); $j++){
            if($mass1[$i]>$mass1[$j]){
                $tmp = $mass1[$i];
                $mass1[$i] = $mass1[$j];
                $mass1[$j] = $tmp;
            }
        }
    }
  
    for($i=0; $i<count($mass1); $i++){
        echo $mass1[$i];
    }
?>
