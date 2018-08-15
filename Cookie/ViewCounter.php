
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


?>