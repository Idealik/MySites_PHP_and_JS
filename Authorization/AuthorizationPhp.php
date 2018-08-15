<?php
        require "db.php";

        $login = trim($_POST['login']);
        $password = $_POST['password'];
        $email  = trim($_POST['e-mail']);
        $data_sent = $_POST['bt_registred'];
        
    if(isset($data_sent)){
        // процесс авторизации 
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($login));
        
        if($user){
            //логин существует
            if(password_verify($password,$user->password)){
                // все хорошо, логиним пользователя
                $_SESSION['logged_user'] = $user;
            }
            else{
                $errors[] = "Password is wrong";                
            }
        }
        else{
            $errors[] = "Login is not found";
        }

        if(empty($errors)){
            //все хорошо
            echo "AuthorizationPhp is successfull </br>"; 
            echo "You can go on the  <a href='index.php'> main </a> page";
        }
        else{
            echo '<p>'.array_shift($errors).'</p>';
        }
      
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
    <header class= "header-class">
        <h1>Here you can authorization on the site</h1>
    </header>
    <section class="login-place">
        <form action="AuthorizationPhp.php" method="POST" >
            <div class="text-place">
                <input type="text" placeholder="login" name="login" value="<?php echo @$login;?>" >
                <input type="password" placeholder="password" name="password">
               
                <button type='submit' name="bt_registred">Authorization</button>
             </div>
        </form>
    </section>
</body>
</html>
