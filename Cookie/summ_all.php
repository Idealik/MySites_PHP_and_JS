<?php
    include('db.php');

    $full_summ=0;
    $order = $_COOKIE['orders'];
     // BMW JAGA LADA ...
    $all_price = array();

    $price_cars = R::find('cars', 'price > 0');

  

    foreach( $price_cars as $price_car )
    { //получаю данные из БД о ценах и записываю их 
        $all_price[] = $price_car->price;
    }


     define('BMW', $all_price[0]);
     define('JAGA', $all_price[1]);
     define('LADA', $all_price[2]);
     
    for( $i=0; $i<count($order); $i++){
        // в цикле
        switch($order[$i]){
            case 1 :
            $full_summ +=BMW;
            break;

            default:
                echo "Order is empty ";
        }
    }    
   
?>