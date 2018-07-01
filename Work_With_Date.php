<?php
    $myNumber = 2;
    $myBool = true;
    $myString = "It is my string";

    echo " Var myNumber =  $myNumber";
    echo "<br />";
    echo " Var myBool =  $myBool"; // false == "", true == 1;
    echo "<br />";
    echo " Var myString =  $myString";
    echo "<br />";

    $myNumber += 4;
    
    echo " Changed myNumber =  $myNumber";
    echo "<br />";

    $myBool = false;
    echo " Changed myBool =  $myBool"; 
    echo "<br />";

    $myString += " " + " Here i connected new string";
    echo " Changed myString =  $myString";
    echo "<br />"; //?? how i can  concatenate string 

    // constant 
    // Они не требуют $ и их нельзя изменить
    // Можно просмотреть вызвав функцию phpinfo();
    // defined () - если есть такая константа то выведе 1, иначе false
    define('Cost', 200);

    echo "My contsant ";
    echo Cost ;
    echo "<br />";

    // operation 
    echo "Operations with numbers"; 
    echo "<br />";

    $x = 7;
    $y = 2;

    $summ = $x+$y;
    $diff = $x-$y;
    $mult = $x*$y;
    $del = $x/$y;
    $mod = $x%$y;

    echo "$x and $y";
    echo "<br />";

    echo "summ = $summ ";
    echo "diff = $diff ";
    echo "mult = $mult ";
    echo "del = $del ";
    echo "mod = $mod";
    echo "<br />";
    
    echo "Operations with strings"; 
    echo "<br />";
    $x = "Hi";
    $y = "I <b>mark</b>";

    echo $x." ". $y; // concatenate string  with "."

?>