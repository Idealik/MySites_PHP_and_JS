<?php
// ПОФИКСИТЬ: при обновлении страницы каунт стакается
use RedBeanPHP\Util\Dump;
include('db.php');
include('ViewCounter.php');
$car_array = array('img_for_Basket\BMW.jpg','img_for_Basket\JAGA.jpg','img_for_Basket\LADA.jpg' );

//id - arry нужен для записи его потом в куку
$id_arr = array();

$count;
//узнаю айди кнопки или машины, на которую кликлунл пользователь

$id = $_GET['car_id'];
$id++; // потому что нумерация в бд с 1, и массив с 0, не работает с isset

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
                    //получили id и начинаем обрабатывать 
                    if($cars->car_count > 20){                        
                        $count=  People_counter($count);
                        echo '<p>Заказано машин: '.$count.'</p>';

                        // записываем номера заказов для куки.
                        $id_arr[] = $id;
                        // создаем куку с номерами заказов
                        setcookie('orders', $id_arr, time()+7200, '/');
                        
                    }
                    else{
                        echo  '<p>Заказано машин: '.$_COOKIE['count'].'</p>';
                        echo '<p>Этого нет на складе </p>';      
                    }
                  
                }    
             ?>
            <div class="basket-img">

               <?php //отправляемся в корзину ?>
                 <a href="summ_all.php"><img src="img_for_Basket\basket.png" alt=""></a>
            </div>
        </div>
    </header>
    <section class="login-place">
            <form action="Basket.php" method="GET" >
                <div class="picture-place">                
                    <?php
                            //отрисовываю картинки для покупки
                        for($i=0; $i<count($car_array); $i++){

                            echo "<div class = 'card'>";

                                echo "<div class = 'top'>";
                                echo "<img src='".$car_array[$i]."'>";
                                echo "</div>";

                                echo "<div class = 'bottom'>";
                                echo "<button name='car_id' value='".$i."'>Добавить в корзину </button>";
                                echo "</div>";

                            echo "</div>";
                        }
                    ?>
                </div>
            </form>
            
    </section>
</body>
</html>

