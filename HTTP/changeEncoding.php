<?php

    //header отвечает за http запросы 
    //header('location: /...')
    //желательно писать exit после header

    if($_GET['encoding']=='UTF-8'){
    header("Content-Type: text/html; charset=utf-8");
    echo "<p>Привет </p>";
    }

    if($_GET['encoding']=='ASCII'){
    header("Content-Type: text/html; charset=ASCII");
    echo "<p>Привет </p>";
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
            <form action="changeEncoding.php" method="GET" >
                <div class="text-place">
                    <button type='submit' name="encoding" value='UTF-8'>UTF-8</button>
                    <button type='submit' name="encoding" value='ASCII'>ASCII</button>
                </div>

            </form>
    </section>
</body>
</html>
