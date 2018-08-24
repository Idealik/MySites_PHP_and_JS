<?php
      
        if(isset($_COOKIE['liveTime'])){

            if($i==0){
                echo 'Hi, its temporary page';
            }
       
        }
        else{
            header('location: mainTemporaryPage.php');
            exit;
        }
        
        header('refresh: 5');
    
?>