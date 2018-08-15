<?php

    // обработка выбранного языка
    switch($_GET['lang']):
        case 'ru':$mylang='ru'; break;
        case 'eng':$mylang='eng'; break;
        default:$mylang='ru'; break;
    endswitch;
    
?>

<?php
        //массивы с языками и их заменами 
        $lang = array(
            'ru' => array(
                'header' => 'Тут ты можешь сменить язык'
            ),

            'eng' => array(
                'header' => 'Here you can switch language'
            )
        );
    
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
        <h1> <?php echo $lang[$mylang]['header']; ?></h1>
    </header>
    
    <section class="login-place">
            <form action="Switch_language.php" method="GET" >
                <div class="text-place">
                    <button type='submit' name="lang" value='ru'>Русский</button>
                    <button type='submit' name="lang" value='eng'>English</button>
                </div>

            </form>
    </section>
</body>
</html>

<?php
   
   include('ViewCounter.php');
    
?>
