<?php


    //ПОМЕТКА: база данных будет общая, но для того, чтобы заказы быыли уникальными
    // 1 можно записываать в базу ip покупателя и проверять 
    // 2 для авторизованных пользователей можно по логину
    //В этот код также можно добавить очищение базы данных ( возможно сделаю позже), отменять заказы и при зхакрытии очищать бд 
    //ip и клиент соответственно 
    //$_SERVER['REMOTE_ADDR']
    //$_SERVER['HTTP_USER_AGENT']
    //
    include('db.php');
    include('HelpFunction.php');
    $ip = $_COOKIE['ip_client'];
    

    if(isset($_COOKIE['live'])){
    $all_order_id = array();

    // BMW JAGA LADA ...
    $all_price = array();
    //ip клиента

    $price_cars = R::find('cars', 'price > 0');

    foreach( $price_cars as $price_car )
    { 
        //получаю данные из БД о ценах и записываю их         
        // id 1 = BMW, id 2 = JAGA, id 3 = LADA
        $all_price[] = $price_car->price;
    }
   
     define('BMW', $all_price[0]);
     define('JAGA', $all_price[1]);
     define('LADA', $all_price[2]);

     var_dump($all_price);
     echo '<br>';

    // запрашиваю айди покупаемой машины и с IP клиента, полученного из куки клиента
    $order_ids =  R::find('orders', 'ip_client=?', array($ip));
     
    foreach($order_ids as $order_id ){
        $all_order_id[] = $order_id ->order_id;
    }

    var_dump($all_order_id);
    // получаем айпи из базы данных
 
    var_dump($ip_order->ip_client);
    var_dump($_COOKIE['ip_client']);

    for( $i=0; $i<count($all_order_id); $i++){
            {
            switch($all_order_id[$i]){
                case 1 :
                $full_summ +=BMW;
                break;
                case 2 :
                $full_summ +=JAGA;
                break;
                case 3 :
                $full_summ +=LADA;
                break;

                default:
                    echo "Order is empty ";
            }
        }    
    }
    if($full_summ!=0){
        echo '<br>';
        echo 'full summ is: '.$full_summ;
        // отправляемся на страницу, на которой очищаем заказы в бд и куки покупателя !?можно добавить еще удаление заказов отдельно?!
        echo ' <p>Оплатить заказ?</p>';
        echo ' <button><a href="finalPage.php">Оплатить</a></button>';
    }else{
        echo "Ваш заказ пуст";        
    }
    
}
else{
    echo "Ваш заказ пуст";
    clear_Bd($ip);
    echo '<a href="Basket.php">Вернуться на главную страницу</a>';
}
?>
