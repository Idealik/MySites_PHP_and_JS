<?php 
    require "libs/rb.php";

    R::setup('mysql:host=localhost;dbname=mybase',
    'root', '' );
    
    session_start();
 ?>