<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Order</title>
   <h2>Recomend</h2>
   <link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<body>
    <?php    
    $pictures = array('door.jpg', 'tire.jpg', 'spark.jpg', 'oil.jpg', 'gasket.jpg');
            shuffle($pictures);
    ?>
        <div class = picture>
                <table width=100%>
                    <tr>
                        <?php                        
                            for($i=0; $i<3; $i++){
                                echo "<td align = \"center\"> <a href=\"recomend.php\"><img src =\"/mySite/pictures/";
                                echo $pictures[$i];
                                echo "\"/></a></td>";                            
                            }
                        ?>
                    </tr>
                </table>
</body>
</html>