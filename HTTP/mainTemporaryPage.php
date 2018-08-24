<?php


    if(isset($_GET['temporaryPage'])){
        setcookie('liveTime',1,time()+5);
        header('location: temporaryPage.php');
        exit;
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Authorization</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <section class="login-place">
            <form action="mainTemporaryPage.php" method="GET" >
                <div class="text-place">
                    <button type='submit' name="temporaryPage">Перейти не временную страницу</button>                    
                </div>

            </form>
    </section>
</body>
</html>