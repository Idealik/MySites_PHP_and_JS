<?php
    require "db.php";

    $login = trim($_POST['login']);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email  = trim($_POST['e-mail']);
    $data_sent = $_POST['bt_registred'];

    if(isset($data_sent)){

        $errors = array();
        //Процесс регистрации 

        // 1) проверка форм
        if(trim($login=='')){
            $errors[]= "Enter login!";
        }

        if($password==''){
            $errors[]= "Enter password!";
        }

        if($password!=$password2){
            $errors[]= "Repeat password!";
        }

        if(trim($email=='')){
            $errors[]= "Enter  email!";
        }

        if( R::count('users', "login= ?",array($login)) > 0){
            $errors[]= "Login already in use ";
        }

        if( R::count('users', "email= ?",array($email)) > 0){
            $errors[]= "Email already in use ";
        }

        if(empty($errors)){
            //все хорошо
            $user = R::dispense('users');
            $user->login = $login;
            $user->email = $email;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            R::store($user);
            
            echo 'Registration is successfull';
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
        <h1>Here you can registration on our site</h1>
    </header>
    <section class="login-place">
        <form action="signup.php" method="POST" >
            <div class="text-place">
                <input type="text" placeholder="login" name="login" value="<?php echo @$login;?>" >
                <input type="password" placeholder="password" name="password">
                <input type="password" placeholder="repeat your password" name="password2">
                <input type="text" placeholder="e-mail" name="e-mail" value="<?php echo @$email;?>">
                <button type='submit' name="bt_registred">Registration</button>
             </div>
        </form>
    </section>
</body>
</html>
