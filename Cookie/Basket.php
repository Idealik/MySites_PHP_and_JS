<?php
// ПОФИКСИТЬ: при обновлении страницы каунт стакается
use RedBeanPHP\Util\Dump;
include('db.php');
include('HelpFunction.php');
include('ip.php');
$car_array = array('img_for_Basket\BMW.jpg','img_for_Basket\JAGA.jpg','img_for_Basket\LADA.jpg' );

//узнаю ip клиента для уникальности в БД

$ip_client = get_Ip_Clietn();
setcookie('ip_client',$ip_client,time()+7200*6);

//узнаю айди кнопки или машины, на которую кликлунл пользователь
$id = $_POST['car_id'];
var_dump($id);
// запрашиваем инфу из бд
$cars = R::findOne('cars', 'id = ?', array($id)); // array работает так - мы получаем айди с формы и запрашиваем такой в БД
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Authorization</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class= "header-class">
        <h1>Тут вы можете выбрать себе машину и добавить в корзину </h1>
        <div class="basket">
            <?php
            //  Отображение счетчика 
                if(isset($id)){
                    // анти инъекция ?
                    $id = (int)$id;
                    //первый заказ пошел, а значит можно создать куки для жизни корзины
                    setcookie('live','live', time()+20);

                    if(($id!=0)&&(is_int($id))){
                        
                        //получили id и начинаем обрабатывать 
                        if($cars->car_count > 20){                        
                            $count=  People_counter($count);
                            
                            // создаем базу данных для заказов и записываем туда id заказа
                        
                            $order = R::dispense('orders');
                            $order->order_id = $id;
                            $order->ip_client = $ip_client;
                            $id = R::store( $order ); 
                          
                        echo '<p>Заказано машин: '.$count.'</p>';                
                    }
                    else{
                        echo  '<p>Заказано машин: '.$_COOKIE['count'].'</p>';
                        echo '<p>Этого нет на складе </p>';      
                    }

                }
                else{
                    echo "Что-то пошло не так, скорее всего id не число";
                }
              }
              else{
                //при заходе обновляем куки
                Destroy_cokie_counter();
                Destroy_cokie_id();
                
                // создаем массив с индексами покупок
                $count;
            }  
             ?>
            <div class="basket-img">
               <?php //отправляемся в корзину ?>
                 <a href="summ_all.php"><img src="img_for_Basket\basket.png" alt=""></a>
            </div>
        </div>
    </header>
    <section class="login-place">
            <form action="Basket.php" method="POST" >
                <div class="picture-place">                
                    <?php
                            //отрисовываю картинки для покупки
                        for($i=0; $i<count($car_array); $i++){

                            echo "<div class = 'card'>";

                                echo "<div class = 'top'>";
                                echo "<img src='".$car_array[$i]."'>";
                                echo "</div>";

                                echo "<div class = 'bottom'>";
                                echo "<button  type='submit' name='car_id' value='".($i+1)."'>Добавить в корзину </button>";
                                echo "</div>";

                            echo "</div>";
                        }
                    ?>
                </div>
            </form>
            
    </section>
</body>
</html>

