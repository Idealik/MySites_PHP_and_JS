
<?php
    function People_counter($count){
        // количество посещений
        setcookie("count", $count,time()+7200, '/');
        $count = $_COOKIE['count'];

        //пользователь зашел первый раз и создал куку
        if(!isset($count)){
            $count = 0;
        }
        $count++;
        setcookie("count", $count,time()+7200, '/');

        //уничтожаем куку
        if($count>10){
            setcookie("count", $count,time()-100, '/');
        }
        return $count;
    }

    function Destroy_cokie_counter(){
        setcookie("count", $count,time()-100, '/');
    }

    function Destroy_cokie_id(){
        setcookie("orders", serialize($id_arr), time()-1, '/');
    }

    function clear_Bd($ip){
        $order_ids =  R::find('orders', 'ip_client=?', array($ip));
             
           foreach($order_ids as $order_id ){
              R::trash($order_id);
           }
        }
        
?>